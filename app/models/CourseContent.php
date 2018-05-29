<?php


class CourseContent extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'course_content';

    protected $fillable = ['course_id', 'name', 'course_name', 'course_period', 'file_name'];

}
