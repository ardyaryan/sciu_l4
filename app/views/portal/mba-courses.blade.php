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
                            @if(!empty($lecture['files']))
                                @foreach($lecture['files'] as $file)
                                        <a style="margin-left: 10px;" href="{{ '/' . $file['file_name'] }}"><i class="fa fa-file"></i> {{ $file['lecture_name'] }}</a><br>
                                @endforeach
                            @endif
                            @if(!empty($lecture['assignments']))
                                @foreach($lecture['assignments'] as $assignment)
                                    <a style="margin-left: 10px;" href="/mba-courses/assignment/{{ $assignment['id'] }}" target="_blank"><i class="fa fa-tasks"></i> {{ $assignment['title'] }}</a><br>
                                @endforeach
                            @endif
                            @if(!empty($lecture['links']))
                                @foreach($lecture['links'] as $links)
                                     <a style="margin-left: 10px;" href="{{ $links['link'] }}" target="_blank"><i class="fa fa-video-camera"></i> {{ $links['link_name'] }}</a><br>
                                @endforeach
                            @endif
                            @if(!empty($lecture['discussions']))
                                @foreach($lecture['discussions'] as $key => $discussion)
                                    <a style="margin-left: 10px;" href="/mba-courses/forum/{{ $discussion['id'] }}" target="_blank"><i class="fa fa-forumbee"></i> Discussion Board {{ $key + 1 }}</a><br>
                                @endforeach
                            @endif
                        </ul>
                    </ul>
                    <?php $counter ++ ?>
                @endforeach
            </ul>
        </ul>
    @endforeach
</div>