<?php


class CourseReport extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'course_report';

    protected $fillable = ['course_id'];

}
