<div style="margin-top: 20px;margin-left: -100px;">
    <table style="text-align: left;">
        <tr>
            <td style="padding: 5px;">
                <strong>Name:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $data->fname . ' ' . $data->lname }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Location:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $data->country . ', ' . $data->city }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Email:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $data->email }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>First Access:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $data->first_access }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Last Access:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $data->last_access }}
            </td>
        </tr>
    </table>
</div>