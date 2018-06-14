<?php


class CourseLecture extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'course_lecture';

    protected $fillable = ['course_id', 'lecture_period'];

}
