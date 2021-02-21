<?php
session_start();
require "../../bd.php";
$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
$linha = mysqli_fetch_array($result);
 $nivel_jogador = $linha['nivel'];
 $fase_jogador = $linha['fase'];


$rec = $_GET['rec'];

if (!isset($rec)) {
	echo "<script> window.location.href='../../usuario/jogo.php'; </script>";
}

if ($rec == 0) {
	if ($nivel_jogador != 6 and $fase_jogador != 10) {
	echo "<script> window.location.href='../../usuario/jogo.php'; </script>";
}
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>HipoGame</title>
<meta name="generator" content="EclipseCrossword" />
<link rel="icon" href="../../fav.png" />
<style type="text/css"><!--

body, h1, h2, h3, h4, h5, h6
{
	font-family: "Segoe UI", "Franklin Gothic Medium", "Arial", sans-serif;
}

h1, h2, h3, h4, h5, h6
{
	color: #5d6a86;
}

body
{
	cursor: default;
	font-size: small;
	padding: 0;
	margin: 0;
}
nav {

    width: 100%;

    position: relative;

    display: flex;

    background-color: #fb8c00;

    z-index: 99;

    padding-top: 3%;

    box-shadow: 1px 1px 1px black;
    

  }

 #logo {

    color: #fff;

    margin-top: -2%;

    position: absolute;

   	

   	font-size: 25px;

    text-decoration: none;

	font-weight: bold;


}

#voltar {

    text-align: right;

    list-style: none;

    text-decoration: none;

    position: absolute;

    margin-left: 86%;

    margin-top: -3%;

}

.ecw-answerbox
{
	color: black;
	background-color: #FFFAF0;
	border-color: #808080;
	border-style: solid;
	border-width: 1px;
	display: block;
	padding: .75em;
	width: 240pt;
}

.ecw-box
{
	border-style: solid;
	border-width: 1pt;
	cursor: pointer;
	font-size: .12in;
	font-weight: bold;
	height: .18in;
	overflow: hidden;
	text-align: center;
	width: .18in;
}

.ecw-boxcheated_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #2080D0;
}

.ecw-boxcheated_unsel
{
	background-color: #ffffff;
	border-color: #606060;
	color: #2080D0;
}

.ecw-boxerror_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #BF0000;
}

.ecw-boxerror_unsel
{
	background-color: #FFF0F0;
	border-color: #606060;
	color: #BF0000;
}

.ecw-boxnormal_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #000000;
}

.ecw-boxnormal_unsel
{
	background-color: #ffffff;
	border-color: #606060;
	color: #000000;
}

.ecw-button
{
	width: 64pt;
}

.ecw-cluebox
{
	border-bottom-width: 1px;
	border-color: #c0c0c0;
	border-left-width: 0px;
	border-right-width: 0px;
	border-style: solid;
	border-top-width: 1px;
	margin-top: 1em;
	padding-bottom: .5em;
	padding-left: 0pt;
	padding-right: 0pt;
	padding-top: .5em;
}

.ecw-crosswordarea
{
	background-color: #D0D8E0;
	border-color: #808080;
	border-style: solid;
	border-width: 2px;
	padding: .5em;
	font-family: "Segoe UI", "Verdana", "Arial", sans-serif;
	font-size: small;
}

.ecw-copyright
{
	margin-bottom: 1em;
	font-size: x-small;
	font-family: "Segoe UI", "Franklin Gothic Medium", "Arial", sans-serif;
}

.ecw-input
{
	font-family: "Segoe UI", "Verdana", "Arial", sans-serif;
}

.ecw-wordlabel
{
	text-transform: uppercase;
	margin: 0;
}

.ecw-wordinfo
{
	font-size: 8pt;
	color: #808080;
}

.ecw-worderror
{
	color: #c00000;
	font-weight: bold;
	display: none;
	margin-top: 1em;
}

--></style>

</head><body bgcolor="#27c5db">

<nav>
      <a href="#" id="logo">Nível 6</a>
      
      <ul>
        <li id="voltar"><a style="font-size: 20px; text-decoration: none; color: #fff;" href="../../usuario/jogo.php">Página inicial</a></li>
      </ul>
  		
</nav>

<div align="center">

<h1>Cruzadinha</h1>
<h3 style="margin-top: -1em;"></h3>

<div id="waitmessage" class="ecw-answerbox">
	Essa é uma cruzadinha interativa, se você não habilitou o Javascript nessa página, por favor clique em aceitar para ativá-lo.
</div>

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td class="ecw-crosswordarea">

<script type="text/javascript"><!--
	CrosswordWidth = 18;
	CrosswordHeight = 21;
	Words = 10;
	WordLength = new Array(6, 12, 11, 16, 9, 10, 12, 10, 9, 5);
	Word = new Array("OVÁRIO", "PROGESTERONA", "CORPO LÚTEO", "MATURAÇÃO SEXUAL", "FOLICULAR", "ESTROGÊNIO", "TESTOSTERONA", "TESTÍCULOS", "ESTRADIOL", "LÚTEA");
	Clue = new Array("órgão em que são produzidos os hormônios progesterona e estrogênio.", 
"impede a lactogênese durante a gravidez.", 
"Principal fonte de progesterona durante a fase inicial da gravidez.", 
"Uma das funções da testosterona.", 
"Primeira fase do ciclo reprodutivo.", 
"Responsável pelo desenvolvimento das características sexuais secundárias femininas durante a puberdade.", 
"O LH regula a síntese de __________________ pelas células de Leydig.", 
"Órgão em que é produzida a testosterona.", 
"prepara o endométrio para receber o óvulo fecundado.", 
"Segunda fase do ciclo reprodutivo feminino.");
	AnswerHash = new Array(33757, 25570, 53848, 83805, 45825, 94559, 20214, 5646, 66039, 28081);
	WordX = new Array(1, 6, 0, 0, 1, 4, 8, 13, 11, 15);
	WordY = new Array(3, 7, 9, 12, 14, 0, 3, 6, 12, 12);
	LastHorizontalWord = 4;
	OnlyCheckOnce = false;
//-->
</script>

<script type="text/javascript"><!--

// EclipseCrossword (C) Copyright 2000-2013 Green Eclipse.
// The puzzle itself remains the property of its creator. Do not remove this copyright notice.

var BadChars = "`~!@^*()_={[}]\\|:;\"',<>/?";

var TableAcrossWord, TableDownWord;
var CurrentWord, PrevWordHorizontal, x, y, i, j;
var CrosswordFinished, Initialized;

// Check the user's browser and then initialize the puzzle.
if (document.getElementById("waitmessage") != null)
{
	document.getElementById("waitmessage").innerHTML = "Please wait while the crossword is loaded...";
	
	// Current game variables
	CurrentWord = -1;
	PrevWordHorizontal = false;
	
	// Create the cell-to-word arrays.
	TableAcrossWord = new Array(CrosswordWidth);
	for (var x = 0; x < CrosswordWidth; x++) TableAcrossWord[x] = new Array(CrosswordHeight);
	TableDownWord = new Array(CrosswordWidth);
	for (var x = 0; x < CrosswordWidth; x++) TableDownWord[x] = new Array(CrosswordHeight);
	for (var y = 0; y < CrosswordHeight; y++)
		for (var x = 0; x < CrosswordWidth; x++)
		{
			TableAcrossWord[x][y] = -1;
			TableDownWord[x][y] = -1;
		}
	
	// First, add the horizontal words to the puzzle.
	for (var i = 0; i <= LastHorizontalWord; i++)
	{
		x = WordX[i];
		y = WordY[i];
		for (var j = 0; j < WordLength[i]; j++)
		{
			TableAcrossWord[x + j][y] = i;
		}
	}
	
	// Second, add the vertical words to the puzzle.
	for (var i = LastHorizontalWord + 1; i < Words; i++)
	{
		x = WordX[i];
		y = WordY[i];
		for (var j = 0; j < WordLength[i]; j++)
		{
			TableDownWord[x][y + j] = i;
		}
	}
	
	// Now, insert the crossword table.
	document.writeln("<table id=\"crossword\" cellpadding=\"0\" cellspacing=\"0\" style=\"display: none; border-collapse: collapse;\">");
	for (var y = 0; y < CrosswordHeight; y++)
	{
		document.writeln("<tr>");
		for (var x = 0; x < CrosswordWidth; x++)
		{
			if (TableAcrossWord[x][y] >= 0 || TableDownWord[x][y] >= 0)
				document.write("<td id=\"c" + PadNumber(x) + PadNumber(y) + "\" class=\"ecw-box ecw-boxnormal_unsel\" onclick=\"SelectThisWord(event);\">&nbsp;</td>");
			else
				document.write("<td><\/td>");
		}
		document.writeln("<\/tr>");
	}
	document.writeln("<\/table>");
	
	// Finally, show the crossword and hide the wait message.
	Initialized = true;
	document.getElementById("waitmessage").style.display = "none";
	document.getElementById("crossword").style.display = "block";
}

// * * * * * * * * * *
// Event handlers

// Raised when a key is pressed in the word entry box.
function WordEntryKeyPress(event)
{
	if (CrosswordFinished) return;
	// Treat an Enter keypress as an OK click.
	if (CurrentWord >= 0 && event.keyCode == 13) OKClick();
}

// * * * * * * * * * *
// Helper functions

// Called when we're ready to start the crossword.
function BeginCrossword()
{
	if (Initialized)
	{
		document.getElementById("welcomemessage").style.display = "";
		document.getElementById("checkbutton").style.display = "";
		document.getElementById("checkbutton").style.color = "white";
		document.getElementById("checkbutton").style.width = "20%";
	}
}

// Returns true if the string passed in contains any characters prone to evil.
function ContainsBadChars(theirWord)
{
	for (var i = 0; i < theirWord.length; i++)
		if (BadChars.indexOf(theirWord.charAt(i)) >= 0) return true;
	return false;
}

// Pads a number out to three characters.
function PadNumber(number)
{
	if (number < 10)
		return "00" + number;
	else if (number < 100)
		return "0" + number;
	else
		return "" +  number;
}

// Returns the table cell at a particular pair of coordinates.
function CellAt(x, y)
{
	return document.getElementById("c" + PadNumber(x) + PadNumber(y));
}

// Deselects the current word, if there's a word selected.  DOES not change the value of CurrentWord.
function DeselectCurrentWord()
{
	if (CurrentWord < 0) return;
	var x, y, i;
	
	document.getElementById("answerbox").style.display = "none";
	ChangeCurrentWordSelectedStyle(false);
	CurrentWord = -1;
	
}

// Changes the style of the cells in the current word.
function ChangeWordStyle(WordNumber, NewStyle)
{
	if (WordNumber< 0) return;
	var x = WordX[WordNumber];
	var y = WordY[WordNumber];
	
	if (WordNumber<= LastHorizontalWord)
		for (i = 0; i < WordLength[WordNumber]; i++)
			CellAt(x + i, y).className = NewStyle;
	else
		for (i = 0; i < WordLength[WordNumber]; i++)
			CellAt(x, y + i).className = NewStyle;
}

// Changes the style of the cells in the current word between the selected/unselected form.
function ChangeCurrentWordSelectedStyle(IsSelected)
{
	if (CurrentWord < 0) return;
	var x = WordX[CurrentWord];
	var y = WordY[CurrentWord];
	
	if (CurrentWord <= LastHorizontalWord)
		for (i = 0; i < WordLength[CurrentWord]; i++)
			CellAt(x + i, y).className = CellAt(x + i, y).className.replace(IsSelected ? "_unsel" : "_sel", IsSelected ? "_sel" : "_unsel");
	else
		for (i = 0; i < WordLength[CurrentWord]; i++)
			CellAt(x, y + i).className = CellAt(x, y + i).className.replace(IsSelected ? "_unsel" : "_sel", IsSelected ? "_sel" : "_unsel");
}

// Selects the new word by parsing the name of the TD element referenced by the 
// event object, and then applying styles as necessary.
function SelectThisWord(event)
{
	if (CrosswordFinished) return;
	var x, y, i, TheirWord, TableCell;
	
	// Deselect the previous word if one was selected.
	document.getElementById("welcomemessage").style.display = "none";
	if (CurrentWord >= 0) OKClick();
	DeselectCurrentWord();
	
	// Determine the coordinates of the cell they clicked, and then the word that
	// they clicked.
	var target = (event.srcElement ? event.srcElement: event.target);
	x = parseInt(target.id.substring(1, 4), 10);
	y = parseInt(target.id.substring(4, 7), 10);
	
	// If they clicked an intersection, choose the type of word that was NOT selected last time.
	if (TableAcrossWord[x][y] >= 0 && TableDownWord[x][y] >= 0)
		CurrentWord = PrevWordHorizontal ? TableDownWord[x][y] : TableAcrossWord[x][y];
	else if (TableAcrossWord[x][y] >= 0)
		CurrentWord = TableAcrossWord[x][y];
	else if (TableDownWord[x][y] >= 0)
		CurrentWord = TableDownWord[x][y];

	PrevWordHorizontal = (CurrentWord <= LastHorizontalWord);
	
	// Now, change the style of the cells in this word.
	ChangeCurrentWordSelectedStyle(true);
	
	// Then, prepare the answer box.
	x = WordX[CurrentWord];
	y = WordY[CurrentWord];
	TheirWord = "";
	var TheirWordLength = 0;
	for (i = 0; i < WordLength[CurrentWord]; i++)
	{
		// Find the appropriate table cell.
		if (CurrentWord <= LastHorizontalWord)
			TableCell = CellAt(x + i, y);
		else
			TableCell = CellAt(x, y + i);
		// Add its contents to the word we're building.
		if (TableCell.innerHTML != null && TableCell.innerHTML.length > 0 && TableCell.innerHTML != " " && TableCell.innerHTML.toLowerCase() != "&nbsp;")
		{
			TheirWord += TableCell.innerHTML.toUpperCase();
			TheirWordLength++;
		}
		else
		{
			TheirWord += "&bull;";
		}
	}
	
	document.getElementById("wordlabel").innerHTML = TheirWord;
	document.getElementById("wordinfo").innerHTML = ((CurrentWord <= LastHorizontalWord) ? "Horizontal, " : "Vertical, ") + WordLength[CurrentWord] + " letras.";
	document.getElementById("wordclue").innerHTML = Clue[CurrentWord];
	document.getElementById("worderror").style.display = "none";
	document.getElementById("cheatbutton").style.display = (Word.length == 0) ? "none" : "";
	if (TheirWordLength == WordLength[CurrentWord])
		document.getElementById("wordentry").value = TheirWord.replace(/&AMP;/g, '&');
	else
		document.getElementById("wordentry").value = "";
	
	// Finally, show the answer box.
	document.getElementById("answerbox").style.display = "block";
	try
	{
		document.getElementById("wordentry").focus();
		document.getElementById("wordentry").select();
	}
	catch (e)
	{
	}
	
}

// Called when the user clicks the OK link.
function OKClick()
{
	var TheirWord, x, y, i, TableCell;
	if (CrosswordFinished) return;
	if (document.getElementById("okbutton").disabled) return;
	
	// First, validate the entry.
	TheirWord = document.getElementById("wordentry").value.toUpperCase();
	if (TheirWord.length == 0)
	{
		DeselectCurrentWord();
		return;
	}
	if (ContainsBadChars(TheirWord))
	{
		document.getElementById("worderror").innerHTML = "A palavra que você digitou contém caracteres inválidos. Por favor, digite apenas letras na caixa acima.";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	if (TheirWord.length < WordLength[CurrentWord])
	{
		document.getElementById("worderror").innerHTML  = "Você não digitou letras suficientes. Esta palavra tem " + WordLength[CurrentWord] + " letras.";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	if (TheirWord.length > WordLength[CurrentWord])
	{
		document.getElementById("worderror").innerHTML = "Você digitou muitas letras, esta palavra possui " + WordLength[CurrentWord] + " letras.";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	
	// If we made it this far, they typed an acceptable word, so add these letters to the puzzle and hide the entry box.
	x = WordX[CurrentWord];
	y = WordY[CurrentWord];
	for (i = 0; i < TheirWord.length; i++)
	{
		TableCell = CellAt(x + (CurrentWord <= LastHorizontalWord ? i : 0), y + (CurrentWord > LastHorizontalWord ? i : 0));
		TableCell.innerHTML = TheirWord.substring(i, i + 1);
	}
	DeselectCurrentWord();
}

// Called when the "check puzzle" link is clicked.
function CheckClick()
{
	var i, j, x, y, UserEntry, ErrorsFound = 0, EmptyFound = 0, TableCell;
	if (CrosswordFinished) return;
	DeselectCurrentWord();
	
	for (y = 0; y < CrosswordHeight; y++)
	for (x = 0; x < CrosswordWidth; x++)
		if (TableAcrossWord[x][y] >= 0 || TableDownWord[x][y] >= 0)
		{
			TableCell = CellAt(x, y);
			if (TableCell.className == "ecw-box ecw-boxerror_unsel") TableCell.className = "ecw-box ecw-boxnormal_unsel";
		}
		
	for (i = 0; i < Words; i++)
	{
		// Get the user's entry for this word.
		UserEntry = "";
		for (j = 0; j < WordLength[i]; j++)
		{
			if (i <= LastHorizontalWord)
				TableCell = CellAt(WordX[i] + j, WordY[i]);
			else
				TableCell = CellAt(WordX[i], WordY[i] + j);
			if (TableCell.innerHTML.length > 0 && TableCell.innerHTML.toLowerCase() != "&nbsp;")
			{
				UserEntry += TableCell.innerHTML.toUpperCase();
			}
			else
			{
				UserEntry = "";
				EmptyFound++;
				break;
			}
		}
		UserEntry = UserEntry.replace(/&AMP;/g, '&');
		// If this word doesn't match, it's an error.
		if (HashWord(UserEntry) != AnswerHash[i] && UserEntry.length > 0)
		{
			ErrorsFound++;
			ChangeWordStyle(i, "ecw-box ecw-boxerror_unsel");
		}
	}
	
	// If they can only check once, disable things prematurely.
	if ( OnlyCheckOnce )
	{
		CrosswordFinished = true;
		document.getElementById("checkbutton").style.display = "none";
	}
	
	// If errors were found, just exit now.
	if (ErrorsFound > 0 && EmptyFound > 0)
		document.getElementById("welcomemessage").innerHTML = ErrorsFound + (ErrorsFound > 1 ? " erros" : " erro") + " e " + EmptyFound + (EmptyFound > 1 ? " palavras incompletas foram" : " palavra incompleta foram") + " encontradas.";
	else if (ErrorsFound > 0)
		document.getElementById("welcomemessage").innerHTML = ErrorsFound + (ErrorsFound > 1 ? " erros foram" : " erro foram") + " encontrados.";
	else if (EmptyFound > 0)
		document.getElementById("welcomemessage").innerHTML = "Sem erros encontrados mas " + EmptyFound + (EmptyFound > 1 ? " palavras incompletas foram" : " palavra incompleta foram") + " encontradas.";
	
	if (ErrorsFound + EmptyFound > 0)
	{
		document.getElementById("welcomemessage").style.display = "";
		return;
	}
			
	// They finished the puzzle!
	CrosswordFinished = true;
	document.getElementById("checkbutton").style.display = "none";
	document.getElementById("congratulations").style.display = "block";
	document.getElementById("welcomemessage").style.display = "none";
}

// Called when the "cheat" link is clicked.
function CheatClick()
{
	if (CrosswordFinished) return;
	var OldWord = CurrentWord;
	OKClick();
	ChangeWordStyle(OldWord, "ecw-box ecw-boxcheated_unsel");
}

// Returns a one-way hash for a word.
function HashWord(Word)
{
	var x = (Word.charCodeAt(0) * 719) % 1138;
	var Hash = 837;
	var i;
	for (i = 1; i <= Word.length; i++)
		Hash = (Hash * i + 5 + (Word.charCodeAt(i - 1) - 64) * x) % 98503;
	return Hash;
}

//-->
</script>

</td>

<td valign="top" style="padding-left: 1em;">

<div id="welcomemessage" class="ecw-answerbox" style="display:none;">
<h3>Bem vindo!</h3>
<p>Clique em um dos quadradinhos para começar. <br>Escreva a resposta utilizando todos acentos que a palavra tem e espaços caso seja necessário!</p>
</div>

<div id="answerbox" class="ecw-answerbox" style="display:none;">
<h3 id="wordlabel" class="ecw-wordlabel"> &nbsp;</h3>
<div id="wordinfo" class="ecw-wordinfo"> </div>
<div id="wordclue" class="ecw-cluebox"> </div>
<div style="margin-top: 1em;">
	<input class="ecw-input" id="wordentry" type="text" size="24" style="font-weight: bold; text-transform:uppercase;" onkeypress="WordEntryKeyPress(event)" onchange="WordEntryKeyPress(event)" />
</div>
<div id="worderror" class="ecw-worderror"></div>

<table border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-top:1em;"><tbody><tr><td>
<button id="cheatbutton" disabled type="button" class="ecw-input ecw-button" onclick="CheatClick();">Resposta</button>
</td><td align="right">
<button id="okbutton" type="button" class="ecw-input ecw-button" onclick="OKClick();" style="font-weight: bold;">OK</button> &nbsp;
<button id="cancelbutton" type="button" class="ecw-input ecw-button" onclick="DeselectCurrentWord();">Cancelar</button>
</td></tr></tbody></table>

</div>

<div id="congratulations" class="ecw-answerbox" style="display:none;">
<?php
if ($rec == 0) {
?>
<h3>Parabéns!</h3>
<p>Você completou a cruzadinha!<a href="respostacruzadinha.php"> clique aqui </a> para prosseguir ao próximo nível!.
</p>
<?php
}else{
?>
<h3>Parabéns!</h3>
<p>Você completou a cruzadinha!<a href="cruzresprec.php"> clique aqui </a> para concluir o nível!
</p>
<?php
}
?>
</div>

</td></tr></table>

<div style="margin-top: 1em">
	<button id="checkbutton" type="button" onclick="CheckClick();" style="display: none; padding: 20px; background-color: green; font-size: 20px; border-radius: 8px; cursor: pointer;">Enviar</button>
</div>

<script type="text/javascript"><!--
BeginCrossword();
//-->
</script>

</div>

<!-- Created with EclipseCrossword, (C) Copyright 2000-2013 Green Eclipse.  eclipsecrossword.com -->

<div style="position: absolute;  width: 300px; height: 300px; right: 10%; top: 50%; border-radius: 8px ">
	
	
	<fieldset style="border-radius: 8px; background-color: white">
		<h3>Palavras utilizadas na cruzadinha:</h3>
	<p>TESTÍCULOS<br> MATURAÇÃO SEXUAL<br> OVÁRIO<br> FOLICULAR<br> LÚTEA<br> ESTROGÊNIO<br> PROGESTERONA<br> TESTOSTERONA<br> ESTRADIOL<br> CORPO LÚTEO </p>
	</fieldset>

</div>

</body></html>

