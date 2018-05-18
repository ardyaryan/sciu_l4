<div style="margin-top: 20px;margin-left: -100px;">
    <table style="text-align: left;">
        <tr>
            <td style="padding: 5px;">
                <strong>Name:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $profile->fname . ' ' . $profile->lname }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Location:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $profile->country . ', ' . $profile->city }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Email:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $profile->email }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>First Access:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $profile->first_access }}
            </td>
        </tr>
        <tr>
            <td style="padding: 5px;">
                <strong>Last Access:</strong>
            </td>
            <td style="padding: 5px;">
                {{ $profile->last_access }}
            </td>
        </tr>
    </table>
</div>