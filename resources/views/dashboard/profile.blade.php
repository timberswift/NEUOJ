<!doctype html>
<html>
<head>
    <title>Profile</title>
    @include("layout.head")
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include("layout.header")

    <div align="center">
    <form action="/dashboard/profile" method="POST">
    {{ csrf_field() }}
        <h3 class="text-center">Profile</h3>
        <div style="height: 20px;padding-left: 38px">
            @if(count($errors) > 0)
                <div class="form-group" style="width: 400px;text-align: left"><div class="label label-warning" style="font-size: 13px">{{$errors->all()[0]}}</div></div>
            @elseif(isset($profileError))
                <div class="form-group" style="width: 400px;text-align: left"><div class="label label-warning" style="font-size: 13px">{{ $profileError }}</div></div>
            @endif
        </div>
        <table id="profileTable">
                <tr>
                    <td style="padding-left: 20px">Nickname</td>
                    <td><input type="text" name="nickname" value="@if(isset($nickname)){{ $nickname }}@endif" class="form-control"/></td>
                </tr>
                <tr>
                    <td style="padding-left: 20px">School</td>
                    <td><input type="text" name="school" value="@if(isset($school)){{ $school }}@endif" class="form-control"/></td>
                </tr>
                <tr>
                    <td style="padding-left: 20px">学号</td>
                    <td><input type="text" name="stu_id" value="@if(isset($stu_id)){{ $stu_id }}@endif" class="form-control"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right"><input type="submit" value="Save" class="btn btn-success"></td>
                </tr>
        </table>
    </form>
    </div>
    <div style="height: 192px"></div>

    @include("layout.footer")
</body>
</html>