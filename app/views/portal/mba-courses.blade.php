<div style="margin-top: 20px; text-align: left; margin-bottom: 20px">
    @foreach($data['course_contents'] as $key => $course)
        <ul id="menu-content" class="menu-content  ">
            <li data-toggle="collapse" data-target="#content_{{ $key }}" class="collapsed">
                <a href="#"><i class="fa fa-book fa-lg"></i> {{ $course['name'] }} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="content_{{ $key }}" style="margin-left: 10px">
                @foreach($course['general'] as $content)
                    <a href="{{ '/' . $content['file_name'] }}"><i class="fa fa-file"></i> {{ $content['name'] }}</a><br>
                @endforeach
                @foreach($course['content'] as $content)
                        <a href="{{ '/' . $content['course_file_name'] }}"><i class="fa fa-file"></i> {{ $content['name'] . ':  ' . $content['content_period'] . ',  ' . $content['course_name'] }}</a><br>
                @endforeach
            </ul>
        </ul>
    @endforeach
</div>