<h2 class="contentheading">
    Meldingsformulier</h2>

<p class="buttonheading">
    </p>

<p>Deze melding kunt u anoniem plaatsen. Alleen (*) zijn verplichte velden om in te vullen.</p>
<p>

<form method="post"  id="userForm" action="?page=submit">

<div class="componentheading">Melding</div>

<table border="0">

    <tr class="rsform-block">
        <td>Naam</td>
        <td><input type="text"  name="name" id="name" /><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>
        <td></td>
    </tr>
    <tr class="rsform-block">
        <td>E-mail</td>

        <td><input type="email"  name="email" id="email" /><div class="formClr"></div><span  class="formNoError"></span></td>
        <td></td>
    </tr>
    <tr class="rsform-block">
        <td>Plaatsnaam (*)</td>
        <td><input type="text"  name="city" id="city" /><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>
        <td></td>
    </tr>

    <tr class="rsform-block">
        <td colspan="2">Is er sprake van intolerantie tegenover midden- en oost-europeanen? (*)</td>
    </tr>
    <tr class="rsform-block">
        <td>
            <input  name="intolerance" type="radio" value="yes" id="intolerance_yes" />
            <label for="intolerance_yes">ja</label>

            <input  name="intolerance" type="radio" value="no" id="intolerance_no" />
            <label for="intolerance_no">nee</label>

            <div class="formClr"></div><span  class="formNoError">Maak een keuze</span></td>

        <td></td>
    </tr>
    <tr class="rsform-block">
        <td colspan="2">Is er sprake van gebrek aan respect voor andere niet-nederlanders? (*)</td>
    </tr>
    <tr class="rsform-block">
        <td>
            <input  name="respect" type="radio" value="yes" id="respect_yes" />
            <label for="respect_yes">ja</label>

            <input  name="respect" type="radio" value="no" id="respect_no" />
            <label for="respect_no">nee</label>

            <div class="formClr"></div><span  class="formNoError">Maak een keuze</span></td>

        <td></td>
    </tr>

    <tr class="rsform-block">
        <td colspan="2">Is er sprake van generalisering van bevolkingsgroepen? (*)</td>
    </tr>
    <tr class="rsform-block">
        <td>
            <input  name="generalizing" type="radio" value="yes" id="generalizing_yes" />
            <label for="generalizing_yes">ja</label>

            <input  name="generalizing" type="radio" value="no" id="generalizing_no" />
            <label for="generalizing_no">nee</label>

            <div class="formClr"></div><span  class="formNoError">Maak een keuze</span></td>

        <td></td>
    </tr>

    <tr class="rsform-block">
        <td>Anders</td>

        <td><input type="text" name="otherissues" id="otherissues" /><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>
        <td></td>
    </tr>

    <tr class="rsform-block">
        <td>Toelichting</td>
        <td><textarea cols="30" rows="5" name="clarification" id="clarification"  class="rsform-text-box"></textarea><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>
        <td></td>
    </tr>

<!--
    <tr class="rsform-block rsform-block-baanverlies">
        <td>Is er sprake van baanverlies (*)</td>
        <td><input  name="baanverlies]" type="radio" value="ja" id="baanverlies0" /><label for="baanverlies0">ja</label><input  name="form[baanverlies" type="radio" value="nee" id="baanverlies1" /><label for="baanverlies1">nee</label><div class="formClr"></div><span  class="formNoError">Maak een keuze</span></td>
        <td></td>
    </tr>
    <tr class="rsform-block rsform-block-bedrijfstak">

        <td>Bedrijfstak</td>
        <td><textarea cols="30" rows="1" name="bedrijfstak" id="bedrijfstak"  class="rsform-text-box"></textarea><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>
        <td></td>
    </tr>
    <tr class="rsform-block rsform-block-aard-van-het-werk">
        <td>Aard van het werk</td>
        <td><textarea cols="30" rows="2" name="aard van het werk" id="aard van het werk"  class="rsform-text-box"></textarea><div class="formClr"></div><span  class="formNoError">Invalid Input</span></td>

        <td></td>
    </tr>
-->

    <tr class="rsform-block rsform-block-verzenden">
        <td></td>
        <td><input type="submit" value="Verzenden" name="verzenden" id="verzenden"  class="rsform-submit-button" /><div class="formClr"></div></td>
        <td></td>
    </tr>
</table>

</form>

