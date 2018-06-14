<?php


class LectureFile extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lecture_file';

    protected $fillable = ['lecture_id', 'lecture_name', 'file_name'];

}
