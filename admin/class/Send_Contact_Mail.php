<?php
class Send_Contact_Mail
{
    //Email Subject and To Email Address
    var $to = "ravat.s@gurukul.org,rushabh.t@gurukul.org";
    var $subject = "New Contact From Website";

    // Always set content-type when sending HTML email
    var $common_header = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";
    var $From = 'From: <no-reply@touchandfeelelectro.com>';
    var $CC = "\r\n" . 'Cc: myboss@example.com' . "\r\n";



    function send_mail($name, $email, $con_subject, $message)
    {


        $message = '
        
        <html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact From Web</title>
  <link href="https://touchandfeelelectro.com/assets/img/icon/logo.png" rel="icon">
  <style type="text/css">
    table,
    td {
      color: #000000;
    }

    a {
      color: #0000ee;
      text-decoration: underline;
    }

    @media only screen and (min-width: 620px) {
      .u-row {
        width: 600px !important;
      }

      .u-row .u-col {
        vertical-align: top;
      }

      .u-row .u-col-100 {
        width: 600px !important;
      }

    }

    @media (max-width: 620px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }

      .u-row {
        width: calc(100% - 40px) !important;
      }

      .u-col {
        width: 100% !important;
      }

      .u-col>div {
        margin: 0 auto;
      }
    }



    body {
      margin: 0;
      padding: 0;
    }

    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }

    p {
      margin: 0;
    }

    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }

    * {
      line-height: inherit;
    }

    a[x-apple-data-detectors="true"] {
      color: inherit !important;
      text-decoration: none !important;
    }


    .ribbon-wrapper {
      position: relative;
      z-index: 1;
      margin: 0 auto;
    }



    .ribbon {
      font-size: 20px !important;
      text-transform: uppercase;
      width: 108.5%;
      position: relative;
      background: #003399;
      color: #fff;
      left: -25px;
      text-align: center;
      padding: 10px 0em;
    }

    .ribbon:after,
    .ribbon:before {
      content: "";
      position: absolute;
      display: block;
      bottom: -20px;
      border: 1em solid #3949ab;
      z-index: -1
    }

    .ribbon:before {
      left: -30px;
      border-right-width: 1.5em;
      border-left-color: transparent
    }

    .ribbon:after {
      right: -30px;
      border-left-width: 1.5em;
      border-right-color: transparent
    }

    .ribbon .ribbon-inner:after,
    .ribbon .ribbon-inner:before {
      content: "";
      position: absolute;
      display: block;
      border-style: solid;
      border-color: #5c6bc0 transparent transparent;
      bottom: -1em;
    }

    .ribbon .ribbon-inner:before {
      left: 0;
      border-width: 1em 0 0 1em
    }

    .ribbon .ribbon-inner:after {
      right: 0;
      border-width: 1em 1em 0 0
    }

    @media only screen and (max-width: 620px) {
      .ribbon {
        font-size: 20px !important;
        text-transform: uppercase;
        width: 102%;
        position: relative;
        background: #003399;
        color: #fff;
        left: -3px;
        text-align: center;
        padding: 10px 0em;
      }
    }
  </style>



  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700&display=swap" rel="stylesheet" type="text/css">

</head>

<body class="clean-body"
  style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000;">

  <table
    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt;vertical-align: top;min-width: 320px; Margin: 0 auto;background-color: #f9f9f9;width:100%"
    cellpadding="0" cellspacing="0">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">

                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">

                    <div
                      style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">




                      <table style="font-family:Cabin,sans-serif; background: #e5eaf5;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:5px; padding-top: 20px; padding-bottom: 10px;font-family:Cabin,sans-serif;"
                              align="left">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="padding-right: 0px; padding-left: 0px;" align="center">

                                    <!--  <p style="color: #003399; font-weight: bold;">New Contact From Website</p> -->

                                    <div class="ribbon-wrapper">
                                      <h3 class="ribbon">
                                        <strong class="ribbon-inner">New Contact From Website</strong>
                                      </h3>
                                    </div>


                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>





                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:Cabin,sans-serif;"
                              align="left">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="padding-right: 0px;padding-left: 0px;" align="center">

                                    <img src="https://touchandfeelelectro.com/assets/img/icon/logo.png" width="100" height="30">

                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #003399;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">

                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">

                    <div
                      style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">




                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px 5px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div
                                style="color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 28px; line-height: 39.2px;"><strong><span
                                        style="line-height: 39.2px; font-size: 28px;">
                                       ' . $name . '
                                        </span></strong></span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:Cabin,sans-serif;  margin-bottom: 25px;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word; padding:5px; font-family:Cabin,sans-serif;"
                              align="left">

                              <div style="color: #e5eaf5; line-height: 40%; text-align: center; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 1%; letter-spacing: 1.5px;">
                                  <strong>' . $email . '</strong>
                                </p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">

                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                    <div
                      style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div style="line-height: 160%;">
                                <p style="font-size: 14px; line-height: 160%;"><span
                                    style="font-size: 19px; line-height: 25px; color: #003399; font-weight: bold;">Subject
                                    : </span></p>
                                <p style="font-size: 14px; line-height: 160%; padding-top: 10px;">
                                <span style="font-size: 18px; line-height: 28.8px;">
                                    ' . $con_subject . '
                                    </span>
                                    </p>
                                <hr style="border-top: 2px dashed #003399;">
                              </div>

                            </td>
                          </tr>


                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 55px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div style="line-height: 100%;">
                                <p style="font-size: 14px; line-height: 100%;"><span
                                    style="font-size: 19px; line-height: 15px; color: #003399; font-weight: bold;">Message
                                    : </span></p>
                                <p style="font-size: 14px; line-height: 160%; padding-top: 10px;">
                                <span style="font-size: 18px; line-height: 28.8px;">Youre almost ready to get started.
                                ' . $message . '
                                    </span>
                                    </p>

                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>


                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word; padding:30px 55px 20px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
                                <p style="line-height: 160%; font-size: 14px; color: red;"><span
                                    style="font-size: 15px; line-height: 28.8px;">This is System Generated Mail</span>
                                </p>
                                <p style="line-height: 160%; font-size: 14px;"><span
                                    style="font-size: 14px; line-height: 28.8px;">Reply To
                                    <a href="mailto:' . $email . '"
                                      style="text-decoration: none;font-size: 17px;">' . $email . '</a>
                                  </span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>


                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                    <div
                      style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">


                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:20px 55px 18px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div
                                style="color: #003399; line-height: 160%; text-align: center; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 160%;"><span
                                    style="font-size: 20px; line-height: 32px;"><strong>Touch & Feel Electro
                                      System</strong></span></p>
                                <p style="font-size: 14px; line-height: 160%;"><span
                                    style="font-size: 16px; line-height: 25.6px; color: #000000;">+11 111 333
                                    4444</span></p>
                                <p style="font-size: 14px; line-height: 160%;"><span
                                    style="font-size: 16px; line-height: 25.6px; color: #000000;">
                                    <a href="mailto: info@touchandfeelelectro.com"
                                      style="text-decoration: none;">info@touchandfeelelectro.com</a>
                                  </span>
                                </p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 33px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div align="center">
                                <div style="display: table; max-width:244px;">
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="https://facebook.com/" title="Facebook" target="_blank">
                                            <img src="https://touchandfeelelectro.com/assets/img/icon/facebook.png" alt="Facebook" title="Facebook" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="https://linkedin.com/" title="LinkedIn" target="_blank">
                                            <img src="https://touchandfeelelectro.com/assets/img/icon/linkedin.png" alt="LinkedIn" title="LinkedIn" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="https://instagram.com/" title="Instagram" target="_blank">
                                            <img src="https://touchandfeelelectro.com/assets/img/icon/instagram.png" alt="Instagram" title="Instagram" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="mailto: info@touchandfeelelectro.com" title="Email" target="_blank">
                                            <img src="https://touchandfeelelectro.com/assets/img/icon/mail.png" alt="Email" title="Email" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #003399;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                    <div
                      style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:Cabin,sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Cabin,sans-serif;"
                              align="left">

                              <div
                                style="color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 180%;"><span
                                    style="font-size: 16px; line-height: 28.8px;">Copyrights &copy; <span id="year"></span> Touch & Feel Electro System All Rights
                                    Reserved</span></p>
                                    <script>
                                      var d = new Date();
                                      document.getElementById("year").innerHTML = d.getFullYear();
                                    </script>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
        
        ';
        $Reply_To = 'Reply-To:' . $email . '' . "\r\n";

        // Always set content-type when sending HTML email
        $headers = $this->common_header . $this->From . $this->CC . $Reply_To;

        $mail_res = mail($this->to, $this->subject, $message, $headers);
        return $mail_res;
    }
}
