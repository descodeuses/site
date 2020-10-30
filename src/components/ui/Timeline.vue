<template>
<div>
    <header>
      <h2>Quelques chiffres :</h2>
      <p>82,5 % des stagiaires satisfaite de la formation</p>
      <p>90 % des stagiaires ont trouvés un stage à l'issue de la formation</p>
      <p>+ de 700 heures de cours, exercices et projets réalisés pendant la formation</p>
      <p>Ecriture de + de 100 000 lignes de code</p>
	</header>

	<div class="container">
		<div id="timeline">
			<div class="timeline-item">
				<div class="timeline-icon">
                </div>
				<div class="timeline-content">
					<h2>Pré-selection</h2>
					<p>Démarrage des réunions d'informations collective et des ateliers d'initiation à la programmation.</p>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
				</div>
				<div class="timeline-content right">
					<h2>Formation</h2>
					<p>Démarrage du parcours pendant 11,5 mois, rythme intensif en blended-learning et projets collectifs.</p>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
					1
				</div>
				<div class="timeline-content">
					<h2>Accompagnement</h2>
					<p>Tout au long du parcours, les apprenantes et les mentors travaillent ensemble à l'élaboration de projets.</p>
                </div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
				</div>
				<div class="timeline-content right">
					<h2>Immersion</h2>
					<p>Intégration dans les entreprises Tech pour un stage et validation des acquis</p>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
				</div>
				<div class="timeline-content">
					<h2>Action</h2>
					<p>Coaching personnalisé pour toute question sur l'emploi, les compétences et le marché.</p>
                </div>
			</div>
			<div class="timeline-item">
				<div class="timeline-icon"></div>
			</div>
			<br><br>
		</div>
		<div class="row">
			<div class="ending col m6 offset-m3">
				<h2>célébration des embauches !</h2>
			</div>
		</div>
	</div>
</div>

</template>

<style lang="scss" scoped>
@import "https://fonts.googleapis.com/css?family=Dosis:300, 400, 500, 600, 700";

h1 {
	font-size: 25px;
	color: #fff
}
// Variables
$bg-body: #f9f9f9;

$red: #ee4d4d;
$blue: #2b2e48;
$primary-color: $red;
$secondary-color: $blue;

// Typography
$base-font: helvetica, arial, tahoma, verdana;
$base-font-title: "Dosis", arial, tahoma, verdana;

$base-font-color: #726f77;

// Timeline
$timeline-color: $primary-color;

// Mixins and Placeholders
%clearfix {
	&:after,
	&:before {
		content: "";
		display: block;
		width: 100%;
		clear: both;
	}
}

@mixin prefix($prop, $val) {
	@each $prefix in "-webkit-", "-moz-", "-ms-", "" {
		#{$prefix}#{$prop}: $val;
	}
}
*,
*:before,
*:after {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
}

body,
html {
	height: 100%;
}
body {
	background: $bg-body;
	background-size: cover;
	margin: 0;
	padding: 0;
	font-family: $base-font;
	line-height: 20px;
	font-size: 14px;
	color: $base-font-color;
}

img {
	max-width: 100%;
}

a {
	text-decoration: none;
}
.ending h2 {
	text-align: center;
    padding: 15px;
    background: #f9b233;
    color: #fff;
    margin: -20px -20px 0 -20px;
    font-weight: 300;
    border-radius: 3px;
}
.container {
	max-width: 1100px;
	margin: 0 auto;
}

h1,
h2,
h3,
h4 {
	font: {
		family: $base-font-title;
		weight: 500;
	}
}
h2 {
    font-size: 18px;
	text-transform: uppercase
}

.project-name {
	text-align: center;
	padding: 10px 0;
}

// Header
header {
	background: $secondary-color;
	padding: 10px;
	@include prefix(box-shadow, 0 3px 3px rgba(0,0,0,0.05));
	@extend %clearfix;

	.logo {
		color: $primary-color;
		float: left;
		font: {
			family: $base-font-title;
			size: 22px;
			weight: 500;
		}

		> span {
			color: lighten($primary-color, 20%);
			font-weight: 300;
		}
	}

	.social {
		float: right;
		.btn {
			font-family: "Dosis";
			font-size: 14px;
			margin: 10px 5px;
		}
	}
  h2, p{
    color: white;
  }
}
// Timeline
#timeline {
	width: 100%;
	margin: 30px auto;
	position: relative;
	padding: 0 10px;
	@include prefix(transition, all 0.4s ease);

	&:before {
		content: "";
		width: 3px;
		height: 100%;
		background: #312A6B;
		left: 50%;
		top: 0;
		position: absolute;
	}

	&:after {
		content: "";
		clear: both;
		display: table;
		width: 100%;
	}

	.timeline-item {
		margin-bottom: 50px;
		position: relative;
		@extend %clearfix;

		.timeline-icon {
			background: #312A6B;
			width: 50px;
			height: 50px;
			position: absolute;
			top: 0;
			left: 50%;
			overflow: hidden;
			margin-left: -23px;
			@include prefix(border-radius, 50%);

			svg {
				position: relative;
				top: 14px;
				left: 14px;
			}
		}

		.timeline-content {
			width: 45%;
			background: #fff;
			padding: 20px;
			@include prefix(box-shadow, 0 3px 0 rgba(0,0,0,0.1));
			@include prefix(border-radius, 5px);
			@include prefix(transition, all 0.3s ease);

			h2 {
				padding: 15px;
				background: #F9B233;
				color: #fff;
				margin: -20px -20px 0 -20px;
				font-weight: 300;
				@include prefix(border-radius, 3px 3px 0 0);
			}

			&:before {
				content: "";
				position: absolute;
				left: 45%;
				top: 20px;
				width: 0;
				height: 0;
				border-top: 7px solid transparent;
				border-bottom: 7px solid transparent;
				border-left: 7px solid #F9B233;
			}

			&.right {
				float: right;

				&:before {
					content: "";
					right: 45%;
					left: inherit;
					border-left: 0;
					border-right: 7px solid #F9B233;
				}
			}
		}
	}
}

// Buttons
.btn {
	padding: 5px 15px;
	text-decoration: none;
	background: transparent;
	border: 2px solid lighten($primary-color, 10%);
	color: lighten($primary-color, 10%);
	display: inline-block;
	position: relative;
	text-transform: uppercase;
	font-size: 12px;
	@include prefix(border-radius, 5px);
	@include prefix(transition, background 0.3s ease);
	@include prefix(box-shadow, 2px 2px 0 lighten($primary-color, 10%));

	&:hover {
		box-shadow: none;
		top: 2px;
		left: 2px;
		@include prefix(box-shadow, 2px 2px 0 transparent);
	}
}

@media screen and (max-width: 768px) {
	#timeline {
		margin: 30px;
		padding: 0px;
		width: 90%;
		&:before {
			left: 0;
		}
		h1, h2, h3, h4, p {
			font-size: 100% !important;
		}
		.timeline-item {
			.timeline-content {
				width: 90%;
				float: right;

				&:before,
				&.right:before {
					left: 10%;
					margin-left: -6px;
					border-left: 0;
					border-right: 7px solid $timeline-color;
				}
			}

			.timeline-icon {
				left: 0;
			}
		}
	}
}

</style>
