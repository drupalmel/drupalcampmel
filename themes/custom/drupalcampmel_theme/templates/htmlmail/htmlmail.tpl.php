<?php
/**
 * @file
 * Default template for HTML Mail
 *
 * DO NOT EDIT THIS FILE. Copy it to your theme directory, and edit the copy.
 *
 * ========================================================= Begin instructions.
 *
 * When formatting an email message with a given $module and $key, [1]HTML
 * Mail will use the first template file it finds from the following list:
 *  1. htmlmail--$module--$key.tpl.php
 *  2. htmlmail--$module.tpl.php
 *  3. htmlmail.tpl.php
 *
 * For each filename, [2]HTML Mail looks first in the chosen Email theme
 * directory, then in its own module directory, before proceeding to the
 * next filename.
 *
 * For example, if example_module sends mail with:
 * drupal_mail("example_module", "outgoing_message" ...)
 *
 *
 * the possible template file names would be:
 *  1. htmlmail--example_module--outgoing_message.tpl.php
 *  2. htmlmail--example_module.tpl.php
 *  3. htmlmail.tpl.php
 *
 * Template files are cached, so remember to clear the cache by visiting
 * admin/config/development/performance after changing any .tpl.php files.
 *
 * The following variables available in this template:
 *
 * $body
 *        The message body text.
 *
 * $module
 *        The first argument to [3]drupal_mail(), which is, by convention,
 *        the machine-readable name of the sending module.
 *
 * $key
 *        The second argument to [4]drupal_mail(), which should give some
 *        indication of why this email is being sent.
 *
 * $message_id
 *        The email message id, which should be equal to
 *        "{$module}_{$key}".
 *
 * $headers
 *        An array of email (name => value) pairs.
 *
 * $from
 *        The configured sender address.
 *
 * $to
 *        The recipient email address.
 *
 * $subject
 *        The message subject line.
 *
 * $body
 *        The formatted message body.
 *
 * $language
 *        The language object for this message.
 *
 * $params
 *        Any module-specific parameters.
 *
 * $template_name
 *        The basename of the active template.
 *
 * $template_path
 *        The relative path to the template directory.
 *
 * $template_url
 *        The absolute URL to the template directory.
 *
 * $theme
 *        The name of the Email theme used to hold template files. If the
 *        [5]Echo module is enabled this theme will also be used to
 *        transform the message body into a fully-themed webpage.
 *
 * $theme_path
 *        The relative path to the selected Email theme directory.
 *
 * $theme_url
 *        The absolute URL to the selected Email theme directory.
 *
 * $debug
 *        TRUE to add some useful debugging info to the bottom of the
 *        message.
 *
 * Other modules may also add or modify theme variables by implementing a
 * MODULENAME_preprocess_htmlmail(&$variables) [6]hook function.
 *
 * References
 *
 * 1. http://drupal.org/project/htmlmail
 * 2. http://drupal.org/project/htmlmail
 * 3. http://api.drupal.org/api/drupal/includes--mail.inc/function/drupal_mail/7
 * 4. http://api.drupal.org/api/drupal/includes--mail.inc/function/drupal_mail/7
 * 5. http://drupal.org/project/echo
 * 6. http://api.drupal.org/api/drupal/modules--system--theme.api.php/function/hook_preprocess_HOOK/7
 *
 * =========================================================== End instructions.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $subject ?></title>

<style type="text/css">
body, #bodyTable, #bodyCell {
  height: 100% !important;
  margin: 0;
  padding: 0;
  width: 100% !important;
}

table {
  border-collapse: collapse;
}

img, a img {
  border: 0;
  outline: none;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  margin: 0;
  padding: 0;
}

p {
  margin: 1em 0;
  padding: 0;
}

a {
  word-wrap: break-word;
}

.ReadMsgBody {
  width: 100%;
}

.ExternalClass {
  width: 100%;
}

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%;
}

table, td {
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}

#outlook a {
  padding: 0;
}

img {
  -ms-interpolation-mode: bicubic;
}

body, table, td, p, a, li, blockquote {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

#bodyCell {
  padding: 0;
}

.mcnImage {
  vertical-align: bottom;
}

.mcnTextContent img {
  height: auto !important;
}

body, #bodyTable {
  background-color: #f89a1f;
}

#bodyCell {
  border-top: 0;
}

h1 {
  color: #428bca !important;
  display: block;
  font-family: Helvetica;
  font-size: 40px;
  font-style: normal;
  font-weight: bold;
  line-height: 125%;
  letter-spacing: -1px;
  margin: 0;
  text-align: left;
}

h2 {
  color: #428bca !important;
  display: block;
  font-family: Helvetica;
  font-size: 26px;
  font-style: normal;
  font-weight: bold;
  line-height: 125%;
  letter-spacing: -.75px;
  margin: 0;
  text-align: left;
}

h3 {
  color: #304354 !important;
  display: block;
  font-family: Helvetica;
  font-size: 18px;
  font-style: normal;
  font-weight: bold;
  line-height: 125%;
  letter-spacing: -.5px;
  margin: 0;
  text-align: left;
}

h4 {
  color: #808080 !important;
  display: block;
  font-family: Helvetica;
  font-size: 16px;
  font-style: normal;
  font-weight: bold;
  line-height: 125%;
  letter-spacing: normal;
  margin: 0;
  text-align: left;
}

#templatePreheader {
  background-color: #FFFFFF;
  border-top: 0;
  border-bottom: 0;
}

.preheaderContainer .mcnTextContent, .preheaderContainer .mcnTextContent p {
  color: #606060;
  font-family: Helvetica;
  font-size: 11px;
  line-height: 125%;
  text-align: left;
}

.preheaderContainer .mcnTextContent a {
  color: #606060;
  font-weight: normal;
  text-decoration: underline;
}

#templateHeader {
  background-color: #FFFFFF;
  border-top: 0;
  border-bottom: 0;
}

.headerContainer .mcnTextContent, .headerContainer .mcnTextContent p {
  color: #606060;
  font-family: Helvetica;
  font-size: 15px;
  line-height: 150%;
  text-align: left;
}

.headerContainer .mcnTextContent a {
  color: #6DC6DD;
  font-weight: normal;
  text-decoration: underline;
}

#templateBody {
  background-color: #FFFFFF;
  border-top: 0;
  border-bottom: 0;
}

.bodyContainer .mcnTextContent, .bodyContainer .mcnTextContent p {
  color: #606060;
  font-family: Helvetica;
  font-size: 15px;
  line-height: 150%;
  text-align: left;
}

.bodyContainer .mcnTextContent a {
  color: #f89a20;
  font-weight: normal;
  text-decoration: underline;
}

#templateFooter {
  background-color: #f89a1f;
  border-top: 0;
  border-bottom: 0;
}

.footerContainer .mcnTextContent, .footerContainer .mcnTextContent p {
  color: #606060;
  font-family: Helvetica;
  font-size: 11px;
  line-height: 125%;
  text-align: left;
}

.footerContainer .mcnTextContent a {
  color: #428bca;
  font-weight: normal;
  text-decoration: none;
}

@media only screen and (max-width: 480px) {
  body, table, td, p, a, li, blockquote {
    -webkit-text-size-adjust: none !important;
  }

}

@media only screen and (max-width: 480px) {
  body {
    width: 100% !important;
    min-width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnTextContentContainer] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnBoxedTextContentContainer] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcpreview-image-uploader] {
    width: 100% !important;
    display: none !important;
  }

}

@media only screen and (max-width: 480px) {
  img[class=mcnImage] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnImageGroupContentContainer] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageGroupContent] {
    padding: 9px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageGroupBlockInner] {
    padding-bottom: 0 !important;
    padding-top: 0 !important;
  }

}

@media only screen and (max-width: 480px) {
  tbody[class=mcnImageGroupBlockOuter] {
    padding-bottom: 9px !important;
    padding-top: 9px !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnCaptionTopContent], table[class=mcnCaptionBottomContent] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnCaptionLeftTextContentContainer], table[class=mcnCaptionRightTextContentContainer], table[class=mcnCaptionLeftImageContentContainer], table[class=mcnCaptionRightImageContentContainer], table[class=mcnImageCardLeftTextContentContainer], table[class=mcnImageCardRightTextContentContainer] {
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardLeftImageContent], td[class=mcnImageCardRightImageContent] {
    padding-right: 18px !important;
    padding-left: 18px !important;
    padding-bottom: 0 !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardBottomImageContent] {
    padding-bottom: 9px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardTopImageContent] {
    padding-top: 18px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardLeftImageContent], td[class=mcnImageCardRightImageContent] {
    padding-right: 18px !important;
    padding-left: 18px !important;
    padding-bottom: 0 !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardBottomImageContent] {
    padding-bottom: 9px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnImageCardTopImageContent] {
    padding-top: 18px !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent], table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent] {
    padding-top: 9px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent] {
    padding-top: 18px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnBoxedTextContentColumn] {
    padding-left: 18px !important;
    padding-right: 18px !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=mcnTextContent] {
    padding-right: 18px !important;
    padding-left: 18px !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=templateContainer] {
    max-width: 600px !important;
    width: 100% !important;
  }

}

@media only screen and (max-width: 480px) {
  h1 {
    font-size: 24px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  h2 {
    font-size: 20px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  h3 {
    font-size: 18px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  h4 {
    font-size: 16px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent], td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p {
    font-size: 18px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  table[id=templatePreheader] {
    display: block !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=preheaderContainer] td[class=mcnTextContent], td[class=preheaderContainer] td[class=mcnTextContent] p {
    font-size: 14px !important;
    line-height: 115% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=headerContainer] td[class=mcnTextContent], td[class=headerContainer] td[class=mcnTextContent] p {
    font-size: 18px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=bodyContainer] td[class=mcnTextContent], td[class=bodyContainer] td[class=mcnTextContent] p {
    font-size: 18px !important;
    line-height: 125% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=footerContainer] td[class=mcnTextContent], td[class=footerContainer] td[class=mcnTextContent] p {
    font-size: 14px !important;
    line-height: 115% !important;
  }

}

@media only screen and (max-width: 480px) {
  td[class=footerContainer] a[class=utilityLink] {
    display: block !important;
  }

}</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
<center>
  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%"
         width="100%" id="bodyTable">
    <tr>
      <td align="center" valign="top" id="bodyCell">
        <!-- BEGIN TEMPLATE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="center" valign="top">
              <!-- BEGIN HEADER // -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%"
                     id="templateHeader">
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0"
                           width="600" class="templateContainer">
                      <tr>
                        <td valign="top" class="headerContainer"
                            style="padding-top:10px; padding-bottom:10px;">
                          <table border="0" cellpadding="0" cellspacing="0"
                                 width="100%" class="mcnImageBlock">
                            <tbody class="mcnImageBlockOuter">
                            <tr>
                              <td valign="top" style="padding:9px"
                                  class="mcnImageBlockInner">
                                <table align="left" width="100%" border="0"
                                       cellpadding="0" cellspacing="0"
                                       class="mcnImageContentContainer">
                                  <tbody>
                                  <tr>
                                    <td class="mcnImageContent" valign="top"
                                        style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">


                                      <img align="center" alt=""
                                           src="https://gallery.mailchimp.com/1762195d1f2ea26085e1eff0e/images/4d48512f-d7f8-4496-a197-28f0d1e3ea31.png"
                                           width="564"
                                           style="max-width:664px; padding-bottom: 0; display: inline !important; vertical-align: bottom;"
                                           class="mcnImage">


                                    </td>
                                  </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- // END HEADER -->
            </td>
          </tr>
          <tr>
            <td align="center" valign="top">
              <!-- BEGIN BODY // -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%"
                     id="templateBody">
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0"
                           width="600" class="templateContainer">
                      <tr>
                        <td valign="top" class="bodyContainer"
                            style="padding-top:10px; padding-bottom:10px;">
                          <table border="0" cellpadding="0" cellspacing="0"
                                 width="100%" class="mcnTextBlock">
                            <tbody class="mcnTextBlockOuter">
                            <tr>
                              <td valign="top" class="mcnTextBlockInner">

                                <table align="left" border="0" cellpadding="0"
                                       cellspacing="0" width="600"
                                       class="mcnTextContentContainer">
                                  <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent"
                                        style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">

                                      <?php echo $body ?>

                                    </td>
                                  </tr>
                                  </tbody>
                                </table>

                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- // END BODY -->
            </td>
          </tr>
        </table>
        <!-- // END TEMPLATE -->
      </td>
    </tr>
  </table>
</center>
</body>
</html>