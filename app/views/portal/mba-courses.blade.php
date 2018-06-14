<div style="margin-top: 20px; text-align: left; margin-bottom: 20px">
    <?php $counter = 1; ?>
    @foreach($data['course_contents'] as $key => $course)
        <ul id="menu-content" class="menu-content">
            <li data-toggle="collapse" data-target="#content_{{ $key }}" class="collapsed">
                <a href="#"><i class="fa fa-book fa-lg"></i> {{ $course['name'] }} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="content_{{ $key }}" style="margin-left: 10px">
                @foreach($course['items'] as $period => $lecture)
                    <ul id="menu-content" class="menu-content">
                        <li data-toggle="collapse" data-target="#content_lecture_{{ $counter }}" class="collapsed">
                            <a href="#"><i class="fa fa-calendar "></i> {{ $period }} <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="content_lecture_{{ $counter }}" style="margin-left: 10px">
                            @if(!empty($lecture['lecture_name']))
                                <a style="margin-left: 10px;" href="{{ '/' . $lecture['file_name'] }}"><i class="fa fa-file"></i> {{ $lecture['lecture_name'] }}</a><br>
                            @endif
                            @if(!empty($lecture['assignment_title']))
                                    <a style="margin-left: 15px;" href="/mba-courses/assignment/{{ $lecture['assignment_id'] }}" target="_blank"><i class="fa fa-tasks"></i> {{ $lecture['assignment_title'] }}</a><br>
                            @endif
                            @if(!empty($lecture['link']))
                                <a style="margin-left: 20px;" href="{{ $lecture['link'] }}" target="_blank"><i class="fa fa-video-camera"></i> {{ $lecture['link_name'] }}</a><br>
                            @endif
                            @if(!empty($lecture['forum_id']))
                                <a style="margin-left: 25px;" href="/mba-courses/forum/{{ $lecture['forum_id'] }}" target="_blank"><i class="fa fa-forumbee"></i> Discussion Board</a><br>
                            @endif
                        </ul>
                    </ul>
                    <?php $counter ++ ?>
                @endforeach
            </ul>
        </ul>
    @endforeach
</div>