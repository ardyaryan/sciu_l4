<?php


class LectureAssignment extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lecture_assignment';

    protected $fillable = ['lecture_id', 'title', 'body'];

}
