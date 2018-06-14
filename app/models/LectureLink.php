<?php


class LectureLink extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lecture_link';

    protected $fillable = ['lecture_id', 'link', 'link_name'];

}
