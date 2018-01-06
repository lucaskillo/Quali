
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Actionable emails e.g. reset password</title>
    <link href="/assets/site/css/email.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-wrap">
                            <table  cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="text-align: center; max-width: 50%">
                                        <img class="img-responsive" style="max-width: 50%" src="/assets/site/img/backgrounds/computer-screens.jpg"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h3>Novo contato do Site</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h4>Nome</h4>
                                        <p>{{$nome}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h4>E-mail</h4>
                                        <p>{{$email}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h4>Assunto</h4>
                                        <p>{{$assunto}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h4>Mensagem</h4>
                                        <p>{{$mensagem}}</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="footer">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block">Qualimentos Jr.</td>
                        </tr>
                    </table>
                </div></div>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>
