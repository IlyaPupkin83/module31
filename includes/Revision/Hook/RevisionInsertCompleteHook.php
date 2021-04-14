<?php

namespace MediaWiki\Revision\Hook;

use Revision;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "RevisionInsertComplete" to register handlers implementing this interface.
 *
 * @deprecated since 1.31 Use RevisionRecordInserted hook instead
 * @ingroup Hooks
 */
interface RevisionInsertCompleteHook {
	/**
	 * This hook is called after a revision is inserted into the database.
	 *
	 * @since 1.35
	 *
	 * @param Revision $revision
	 * @param null $data DEPRECATED! Always null!
	 * @param null $flags DEPRECATED! Always null!
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onRevisionInsertComplete( $revision, $data, $flags );
}
