<?php

namespace W7\App\Model\Logic;

use W7\App\Model\Entity\UserOperateLog;
use W7\Core\Helper\Traiter\InstanceTraiter;

class UserOperateLogic extends BaseLogic
{
	use InstanceTraiter;

	public function getByChapterAndOperate($chapterId, $operate)
	{
		return UserOperateLog::query()->where('chapter_id', '=', $chapterId)->where('operate', '=', $operate)->first();
	}
}