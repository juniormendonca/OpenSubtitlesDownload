<?php

$string['auth_emailadmindescription'] = '<p>Email-based self-registration with Admin confirmation enables a user to create their own account via a \'Create new account\' button on the login page. The site admins then receive an email containing a secure link to a page where they can confirm the account. Future logins just check the username and password against the stored values in the Moodle database.</p><p>Note: In addition to enabling the plugin, email-based self-registration with admin confirmation must also be selected from the self registration drop-down menu on the \'Manage authentication\' page.</p>';
$string['auth_emailadminnoemail'] = 'Ocorreu um erro quando tentamos enviar o e-mail.<br/>Favor entrar em contato com um administrador da plataforma.';
$string['auth_emailadminrecaptcha'] = 'Adds a visual/audio confirmation form element to the signup page for email self-registering users. This protects your site against spammers and contributes to a worthwhile cause. See http://www.google.com/recaptcha/learnmore for more details. <br /><em>PHP cURL extension is required.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Enable reCAPTCHA element';
$string['auth_emailadminsettings'] = 'Settings';

$string['auth_emailadminuserconfirmation'] = '
	<p style="text-align: center;">
        <img src="https://www.tjmt.jus.br/intranet.arq/downloads/Imprensa/NoticiaImprensa/image/2018/11%20-%20Novembro/05%20-%20Esmagis.png" width="158" height="159" />
	</p>

	<p>
		Ilmo(a). Sr(a). <b>{$a->firstname}</b>
	</p>

	<br>Sua solicitação de acesso à nosssa plataforma EAD foi aprovada! Bem vindo(a)!
	<br>


	--
	<br><b>Escola Superior da Magistratura</b>
	<br>Tribunal de Justiça de Mato Grosso

	<br>Site: <a href=http://www.tjmt.jus.br/esmagis>www.tjmt.jus.br/esmagis</a>
	<br>E-mail: <a href="mailto:esmagis.cursos@tjmt.jus.br">esmagis.cursos@tjmt.jus.br</a>
	<br>Telefones: <a href="tel:+556536173844">(65) 3617-3844</a> / <a href="tel:+556536173467">3467</a> / <a href="tel:+5565999431576">99943-1576</a>
';

	// E-mail de confirmação que será enviado para os adminsitradores quando um novo usuário se cadastra na plataforma
$string['auth_emailadminconfirmation'] = '
	{$a->firstname} {$a->lastname} criou uma conta em <b>\'{$a->sitename}\'</b> com os seguintes dados:

	<big>
	<b>Dados do(a) magistrado(a) ou servidor(a):</b>
	{$a->customfields}
	</big>

	Para confirmar esta conta, você pode clicar neste link -> <a href="{$a->link}">Confirmar conta</a>
	Ou acessar pela plataforma em "Administração do site" -> "Usuários"

	--

	Dados adicionais do cadastro:
	{$a->userdata}
';

$string['auth_emailadminconfirmationsubject'] = '{$a}: Nova conta criada aguardando validação.';
$string['auth_emailadminconfirmsent'] = '<p>Sua conta foi criada e está aguardando a validação de um administrador.<br/><br/>Você receberá um e-mail assim que a sua conta for validada.</p>';
$string['auth_emailadminnotif_failed'] = 'Nao foi possivel enviar a notificacao de registro para: ';
$string['auth_emailadminnoadmin'] = 'No admin found based on notification strategy. Please check auth_emailadmin configuration.';
$string['auth_emailadminnotif_strategy_key'] = 'Notification strategy:';
$string['auth_emailadminnotif_strategy'] = 'Defines the strategy to send the registration notifications. Available options are "first" admin user, "all" admin users or one specific admin user.';
$string['auth_emailadminnotif_strategy_first'] = 'Primeiro administrador';
$string['auth_emailadminnotif_strategy_all'] = 'Todos os administradores';

$string['pluginname'] = 'Email-based self-registration with admin confirmation';
