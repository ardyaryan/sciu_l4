<?php


class CourseParticipant extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'course_participant';

    protected $fillable = ['course_id', 'user_id', 'notes_id', 'course_blog_id'];

}
