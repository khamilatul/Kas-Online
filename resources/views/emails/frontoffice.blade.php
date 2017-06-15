<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- If you delete this tag, the sky will fall on your head -->
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin-top: 15px; background: #dddddd; font-family: Arial;">
<div style="font-size:20px;line-height:20px;display:block">&nbsp;</div>
<table style="border-spacing:0;width:650px;min-width:650px">
    <tbody>
    <tr>
        <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;font-size:1px;line-height:1px">
            &nbsp;</td>
    </tr>
    </tbody>
</table>
<div style="background: #fff; box-shadow: 4px 4px 2px #bbb; width: 600px; margin: auto; padding: 50px 25px; border-radius: 5px;">

    <h4 style="margin: 5px; padding: 0; color: #cc4433; text-align: center;">
        <img src="{{ $message->embed(public_path() . '/assets/images/logo2.png') }}" width="100px">

          <center>  <span style="Margin-top:0;font-weight:normal;font-family:sans-serif;Margin-bottom:15px;text-align:center;font-size:13px;line-height:19px;color:#97a3b1;Margin:0">
                <em><a style="text-decoration: none;font-style:normal;color:#1bb4d5 ;"
                       href=""
                       target="_blank">
                        e-SP2DTRACK</a></em><br>
                Jln.Raya Kedungpedaringan TLP(0341)394776,Fax(0341)395777 Kecamatan Kepanjen
                <br>
                Kabupaten Malang Provinsi Jawa Timur
            </span>
          </center>

    </h4>

    <p style="text-align:center; color: #333;padding: 0">

        <div style="color:#333; text-align: justify">
            <hr style="color: #eee; margin: 4px 0 0 0">
    <p>
        Kepada Siswa Atas Nama  {{$name}}

    </p>
    <p>
        Terima Kasih Anda Telah Mendaftar Sebagai Member dari Kas Kelas {{$kelas}}
    </p>
    <p>
        Berikut Rincian Data Pendaftaran :
    </p>
    <table style="width: 600px;">
        <tbody>
        <tr>
            <td width="25%" valign="top">Email</td>
            <td width="75%" valign="top">{{$email}}</td>
        </tr>
        <tr>
            <td width="25%" valign="top">Password</td>
            <td width="75%" valign="top">{{$password}}</td>
        </tr>
        </tbody>
    </table>
    <p>
        Lakukan Login Sistem Kas Kelas melalui link:
        <a href="
                {{ URL::to('login') }}"><button>Klik</button>
        </a>
    </p>

    <!--<p>
        Salam,
    </p>-->
    <p>
        Bendahara Kelas{{$kelas}}
    </p>
    <p>
        (Email ini Dikendalikan Oleh Sistem/Mesin Otomatis dan Tidak Perlu Dibalas)
    </p>
    <hr style="color: #eee; margin: 4px 0 0 0">
    <p><em style="text-align: right; font-size: 12px;color: #bbb; margin: 0;">
            e-SP2DTRACK<br>
        </em>
    </p>
</div>
</div>

<table width="500" style="border-spacing:0;Margin:0 auto">
    <tbody>
    <tr>
        <td style="padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:center;padding-top:45px">
            <table width="72" style="display:inline-block;border-spacing:0">
                <tbody>
                <tr>
                    <td width="34"
                        style="padding-right:2px;padding-top:0;padding-bottom:0;padding-left:0;vertical-align:top;text-align:center">
                        <a href="https://twitter.com/cyberid41" style="color:#1bb4d5;text-decoration:underline"
                           target="_blank"><img label="Twitter Icon"
                                                src="https://ci5.googleusercontent.com/proxy/GM31cZrGjJHhIio6aJBdPb2mX1SqC4qizXsrmWWZYB_-1olBNMjnA7NH2zepxAQ5LUiUEYYJcTeQx3LDz8MLU3IwtXKSOUvl2bkDCBNXcHTMQMNW8mjfX8rWH7I=s0-d-e1-ft#http://i8.cmail19.com/ti/y/80/40C/5F5/151044/images/footer-twitter.png"
                                                alt="twitter" width="34" style="border-width:0;display:block"
                                                class="CToWUd"></a>
                    </td>
                    <td width="34"
                        style="padding-left:2px;padding-top:0;padding-bottom:0;padding-right:0;vertical-align:top;text-align:center">
                        <a href="https://facebook.com/cyberid41"
                           style="color:#1bb4d5;text-decoration:underline" target="_blank"><img label="Facebook Icon"
                                                                                                src="https://ci5.googleusercontent.com/proxy/ayodShWIP1z_lsGppFAGEbIOiBgn6REekVqXG4pEAg9ZCwNRSR4iWgIuSKfz3KYi_I9UaSgIm6nIxGuECBnTKCHwG7mVGcirFpxxVBAE2G-QBGJlAVdS1dXasc6K=s0-d-e1-ft#http://i9.cmail19.com/ti/y/80/40C/5F5/151044/images/footer-facebook.png"
                                                                                                alt="facebook"
                                                                                                width="34"
                                                                                                style="border-width:0;display:block"
                                                                                                class="CToWUd"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding-top:12px;padding-bottom:14px;padding-right:0;padding-left:0;vertical-align:top;text-align:center">
            <p style="Margin-top:0;font-weight:normal;font-family:sans-serif;Margin-bottom:15px;text-align:center;font-size:13px;line-height:19px;color:#97a3b1;Margin:0">
                <em><a style="text-decoration: none;font-style:normal;color:#1bb4d5 ;"
                       href="http://kodesoft.co.id/"
                       target="_blank">SMK Negeri Kepanjen</a></em><br>
                Jln.Raya Kedungpedaringan Tlp(0341)394776,Fax(0341)395777<br>
                Kecamatan Kepanjen Kabupaten Malang Provinsi Jawa Timur
            </p>
        </td>
    </tr>
    <tr>
        <td height="80"
            style="font-size:0;line-height:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:center">
            &nbsp;</td>
    </tr>
    </tbody>
</table>
</body>
</html>