<?php


class LectureForum extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lecture_forum';

    protected $fillable = ['lecture_id'];

}
