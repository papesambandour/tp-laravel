<!DOCTYPE html >
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width" />
    <meta charset="utf-8">

<title>Mail de notification AfricanSoftWares</title>
<style>
    * {
        margin: 0;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        box-sizing: border-box;
        font-size: 14px;
    }

    img {
        max-width: 100%;
    }

    body {
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: none;
        width: 100% !important;
        height: 100%;
        line-height: 1.6em;
        /* 1.6em * 14px = 22.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
        /*line-height: 22px;*/
    }

    /* Let's make sure all tables have defaults */
    table td {
        vertical-align: top;
    }

    /* -------------------------------------
        BODY & CONTAINER
    ------------------------------------- */
    body {
        background-color: #f6f6f6;
    }

    .body-wrap {
        background-color: #f6f6f6;
        width: 100%;
    }

    .container {
        display: block !important;
        max-width: 600px !important;
        margin: 0 auto !important;
        /* makes it centered */
        clear: both !important;
    }

    .content {
        max-width: 600px;
        margin: 0 auto;
        display: block;
        padding: 20px;
    }

    /* -------------------------------------
        HEADER, FOOTER, MAIN
    ------------------------------------- */
    .main {
        background-color: #fff;
        border: 1px solid #e9e9e9;
        border-radius: 3px;
    }

    .content-wrap {
        padding: 20px;
    }

    .content-block {
        padding: 0 0 20px;
    }

    .header {
        width: 100%;
        margin-bottom: 20px;
    }

    .footer {
        width: 100%;
        clear: both;
        color: #999;
        padding: 20px;
    }
    .footer p, .footer a, .footer td {
        color: #999;
        font-size: 12px;
    }

    /* -------------------------------------
        TYPOGRAPHY
    ------------------------------------- */
    h1, h2, h3 {
        font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #000;
        margin: 40px 0 0;
        line-height: 1.2em;
        font-weight: 400;
    }

    h1 {
        font-size: 32px;
        font-weight: 500;
        /* 1.2em * 32px = 38.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
        /*line-height: 38px;*/
    }

    h2 {
        font-size: 24px;
        /* 1.2em * 24px = 28.8px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
        /*line-height: 29px;*/
    }

    h3 {
        font-size: 18px;
        /* 1.2em * 18px = 21.6px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
        /*line-height: 22px;*/
    }

    h4 {
        font-size: 14px;
        font-weight: 600;
    }

    p, ul, ol {
        margin-bottom: 10px;
        font-weight: normal;
    }
    p li, ul li, ol li {
        margin-left: 5px;
        list-style-position: inside;
    }

    /* -------------------------------------
        LINKS & BUTTONS
    ------------------------------------- */
    a {
        color: #348eda;
        text-decoration: underline;
    }

    .btn-primary {
        text-decoration: none;
        color: #FFF;
        background-color: #348eda;
        border: solid #348eda;
        border-width: 10px 20px;
        line-height: 2em;
        /* 2em * 14px = 28px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
        /*line-height: 28px;*/
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        display: inline-block;
        border-radius: 5px;
        text-transform: capitalize;
    }

    /* -------------------------------------
        OTHER STYLES THAT MIGHT BE USEFUL
    ------------------------------------- */
    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .aligncenter {
        text-align: center;
    }

    .alignright {
        text-align: right;
    }

    .alignleft {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    /* -------------------------------------
        ALERTS
        Change the class depending on warning email, good email or bad email
    ------------------------------------- */
    .alert {
        font-size: 16px;color: #fff;font-weight: 500; padding: 20px;text-align: center; border-radius: 3px 3px 0 0;
    }
    .alert a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
    }
    .alert.alert-warning {
        background-color: #FF9F00;
    }
    .alert.alert-bad {
        background-color: #D0021B;
    }
    .alert.alert-good {
       /* background-color: #68B90F;*/
        background-color: #0A947B;
    }

    /* -------------------------------------
        INVOICE
        Styles for the billing table
    ------------------------------------- */
    .invoice {
        margin: 40px auto;
        text-align: left;
        width: 80%;
    }
    .invoice td {
        padding: 5px 0;
    }
    .invoice .invoice-items {
        width: 100%;
    }
    .invoice .invoice-items td {
        border-top: #eee 1px solid;
    }
    .invoice .invoice-items .total td {
        border-top: 2px solid #333;
        border-bottom: 2px solid #333;
        font-weight: 700;
    }

    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 640px) {
        body {
            padding: 0 !important;
        }

        h1, h2, h3, h4 {
            font-weight: 800 !important;
            margin: 20px 0 5px !important;
        }

        h1 {
            font-size: 22px !important;
        }

        h2 {
            font-size: 18px !important;
        }

        h3 {
            font-size: 16px !important;
        }

        .container {
            padding: 0 !important;
            width: 100% !important;
        }

        .content {
            padding: 0 !important;
        }

        .content-wrap {
            padding: 10px !important;
        }

        .invoice {
            width: 100% !important;
        }
    }
</style>
</head>

<body >

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600" style="background: #0A947B">
			<div class="content" >
				<table class="main" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td style="font-size: 16px;color: #fff;font-weight: 500; padding: 20px;text-align: center; border-radius: 3px 3px 0 0;background-color: #0A947B;">

                            <img src="{{asset('images/logo/logo-africansoftwares-1.jpg')}}"><br>
                            Votre commande Kaspersky Sur AfricanSoftwares
                        </td>
					</tr>
					<tr>
						<td class="content-wrap" style="padding: 28px 76px !important;">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
                                        Bonjour <strong>{{$name}}</strong>,
                                    </td>
								</tr>
								<tr>
									<td class="content-block">
                                        Votre commande N° {{$ref}} est validée et vous pouvez en profiter dès maintenant.
									</td>
								</tr>
								<tr>
									<td class="content-block">
                                        La durée de validité de votre abonnement débute immédiatement,
                                        c’est pourquoi nous vous recommandons d’installer votre protection dès que possible.
									</td>
								</tr>
								<tr>
									<td class="content-block">
                                        Vous trouverez ci-dessous toutes les informations concernant l’installation
                                        de votre protection Kaspersky Anti-Virus. Conservez précieusement cet email.
									</td>
								</tr>
								<tr>
									<td class="content-block" style="border-top: 10px #0A947B solid">

									</td>
								</tr>
								<tr>
									<td class="content-block"  style="font-size: 18px">
                                        Votre commande
                                    </td>
								</tr>
								<tr>
									<td class="content-block"  >
                                        <strong>Nom</strong> : {{$name}}<br>
                                        <strong>Email</strong> : {{$mail}}
                                    </td>
								</tr>
								<tr style="padding: 20px">
									<td class="content-block"  style="border: 1px #0A947B solid;padding: 10px">
                                        <strong>Kaspersky Anti-Virus (1 an, 1 PC)</strong><br>
                                        <strong>Clée de la licence</strong> : <strong style="color: #0A947B">{{$key}}</strong><br><br>
                                        Comment activer votre abonnement premium<br><br>
                                        <ul style="color: #413b3b">
                                            <li>Votre abonnement est activé à la date d'achat.</li>
                                            <li>Copiez le code d'activation ci-dessus.</li>
                                            <li>Ouvrez votre fenêtre de Kaspersky Anti-Virus.</li>
                                            <li>Cliquez sur vos informations de licence dans l'angle inférieur droit de la fenêtre principale.</li>
                                            <li>Collez votre code dans le champ qui apparaît, puis cliquez sur le bouton « Activer ».</li>
                                            <li>
                                                Si vous n'avez pas Kaspersky Anti-Virus installé,
                                            <a href="https://www.kaspersky.fr/downloads/thank-you/antivirus">téléchargez-le ici.</a>
                                            </li>
                                        </ul>
                                        <br>
                                        Des questions sur l'activation ? Veuillez consulter notre base de
                                        connaissances ou contactez le  <a href="https://support.kaspersky.fr/">Support Technique.</a>

                                    </td>
								</tr>

                                <tr>
                                    <td class="content-block" style="border-top: 10px #0A947B solid">

                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" style="font-size: 18px">
                                        Récapitulatif
                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" >
                                        <strong>Coordonnées de facturation </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        {{$name}}, Dakar,Senegal
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                       <table style="text-align: left; font-size: 4px !important;">
                                           <strong>Article(s) commandé(s)</strong> :  Kaspersky {{$productname}} ( {{$packname}} )
                                           <strong>Prix à l’unité</strong> : {{$amount}} xof

                                       </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" style="font-size: 18px">
                                        Fonctionnement du service d’abonnement
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        Ce service est proposé par AfricanSoftwares (le partenaire e-commerce de Kaspersky Lab).
                                        L’abonnement est un moyen simple et pratique de vous assurer que votre ordinateur,
                                        vos données personnelles et vos informations financières seront protégés en permanence.
                                        Grâce à l’abonnement, la licence de votre produit Kaspersky Lab sera prolongée automatiquement,
                                        avant qu’elle n’expire.
                                    </td>
                                </tr>


                                <tr>
                                    <td class="content-block" style="font-size: 18px">
                                        Comment mon abonnement sera-t-il renouvelé ?
                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" >
                                        Lors de votre achat, vous avez autorisé AfricanSoftwares à renouveler automatiquement votre
                                        licence, avec le moyen de paiement utilisé lors de votre achat initial. Vous recevrez
                                        un email avant chaque renouvellement, vous précisant le prix du renouvellement de votre
                                        licence. Les  <a href="https://store.kaspersky.fr/l.php?link=d1cca0e190eb%7C75668299">conditions générales</a> de vente et la politique de confidentialité en vigueur au
                                        moment de votre renouvellement s’appliqueront. Ce service peut être annulé à tout moment en
                                        vous connectant à votre espace client (les informations pour vous connecter se trouvent dans
                                        votre email de confirmation de commande).
                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block">
                                        Comment annuler l’abonnement ? Cliquez <a href="https://store.kaspersky.fr/l.php?link=d1cca0e190eb%7C75668300">ici</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" style="border-top: 10px #0A947B solid">

                                    </td>
                                </tr>

                                <tr>
                                    <td class="content-block" style="font-size: 10px">
                                        Besoin d’aide
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        Contactez le support technique pour obtenir
                                        de l’aide concernant l’installation, l’activation ou
                                        l’utilisation de votre produit, au 01.41.39.87.61 (du lundi au vendredi de 10h à 18h)
                                        ou depuis le portail <a href="https://my.kaspersky.com/">https://my.kaspersky.com/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        Contactez le service client pour les questions de paiement, de facturation
                                        ou de renouvellement,
                                        <a href="https://store.kaspersky.fr/l.php?link=d1cca0e190eb%7C105699104">en vous connectant à votre espace client avec votre adresse e-mail.</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" style="border-top: 10px #0A947B solid">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        Merci de votre confiance,
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" >
                                        <strong>Cordialement,</strong>
                                        Le service client AfricanSoftwares
                                    </td>
                                </tr>

								<!--<tr>
									<td class="content-block">
										<a href="http://www.mailgun.com" class="btn-primary">Upgrade my account</a>
									</td>
								</tr>-->

							</table>
						</td>
					</tr>
				</table>
				<div class="footer">
					<table width="100%">
						<tr>
							<td class="aligncenter content-block"><a href="http://www.mailgun.com" target="_blank" style="color: white !important;">AfricanSoftWare</a> </td>
						</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>
