<?php
#[\AllowDynamicProperties]
class erLhcoreClassModelGroupChatArchive extends erLhcoreClassModelGroupChat
{
    use erLhcoreClassDBTrait;

    public static $dbTable = null;

    public function beforeRemove()
    {
        parent::beforeRemove();
    }

    public function removeThis()
    {
        parent::removeThis();
    }

    public function afterRemove()
    {
        parent::afterRemove();

        // Messages
        $q = ezcDbInstance::get()->createDeleteQuery();
        $q->deleteFrom(erLhcoreClassModelChatArchiveRange::$archiveSupportMsgTable)->where($q->expr->eq('chat_id', $this->id));
        $stmt = $q->prepare();
        $stmt->execute();

        // Members records
        $q = ezcDbInstance::get()->createDeleteQuery();
        $q->deleteFrom(erLhcoreClassModelChatArchiveRange::$archiveSupportMemberTable)->where($q->expr->eq('group_id', $this->id));
        $stmt = $q->prepare();
        $stmt->execute();
    }

}

?>