<?php
if (isset($_GET['subject'])) {
    $subject = $_GET['subject'];
} else {
    $subject = "anonymous";
}
if (isset($_GET['condnum'])) {
    $condnum = $_GET['condnum'];
} else {
    $condnum = -1;
} ?>
<HTML>
<HEAD>
    <TITLE>MouselabWEB Survey</TITLE>
    <script language=javascript src="/resources/library/mlwebphp_100beta/mlweb.js"></SCRIPT>
    <link rel="stylesheet" href="/resources/library/mlwebphp_100beta/mlweb.css" type="text/css">
</head>

<body onLoad="timefunction('onload','body','body')">
<script language="javascript">
    ref_cur_hit = <?php echo($condnum);?>;
    subject = "<?php echo($subject);?>";
</script>

<!--BEGIN TABLE STRUCTURE-->
<SCRIPT language="javascript">
    //override defaults
    mlweb_outtype = "CSV";
    mlweb_fname = "mlwebform";
    tag = "a0^a1`"
        + "b0^b1";


    let taxRate = <?php echo $_GET['taxRate'] ?> + "`";
    let auditProbability = <?php echo $_GET['auditProbability'] ?> +  "";
    let fineRate = <?php echo $_GET['fineRate'] ?> + "^";
    let income =  <?php echo $_GET['score'] ?> + "^";

    txt = income + taxRate + fineRate + auditProbability;

    console.log(txt);

    state = "1^1`"
        + "1^1";

    box = "Income^Tax Rate`"
        + "Fine Rate^Audit Probability";

    CBCol = "0^0";
    CBRow = "0^0";
    W_Col = "200^200";
    H_Row = "50^50";

    chkchoice = "nobuttons";
    btnFlg = 0;
    btnType = "radio";
    btntxt = "";
    btnstate = "";
    btntag = "";
    to_email = "";
    colFix = false;
    rowFix = false;
    CBpreset = false;
    evtOpen = 0;
    evtClose = 0;
    chkFrm = false;
    warningTxt = "Some questions have not been answered. Please answer all questions before continuing!";
    tmTotalSec = 60;
    tmStepSec = 1;
    tmWidthPx = 200;
    tmFill = true;
    tmShowTime = true;
    tmCurTime = 0;
    tmActive = false;
    tmDirectStart = true;
    tmMinLabel = "min";
    tmSecLabel = "sec";
    tmLabel = "Timer: ";

    //Delay: a0 a1 b0 b1
    delay = "0^0^0^0`"
        + "0^0^0^0`"
        + "0^0^0^0`"
        + "0^0^0^0";
    activeClass = "actTD";
    inactiveClass = "inactTD";
    boxClass = "boxTD";
    cssname = "mlweb.css";
    nextURL = "thanks.html";
    expname = "presentation1";
    randomOrder = false;
    recOpenCells = false;
    masterCond = 1;
    loadMatrices();
</SCRIPT>
<!--END TABLE STRUCTURE-->

<FORM name="mlwebform" onSubmit="return checkForm(this)" method="POST"
      action="/resources/library/mlwebphp_100beta/save.php"><INPUT type=hidden name="procdata" value="">
    <input type=hidden name="subject" value="">
    <input type=hidden name="expname" value="">
    <input type=hidden name="nextURL" value="">
    <input type=hidden name="choice" value="">
    <input type=hidden name="condnum" value="">
    <input type=hidden name="to_email" value="">
    <!--BEGIN preHTML-->

    <!--END preHTML-->
    <!-- MOUSELAB TABLE -->
    <TABLE border=1>
        <TR>
            <!--cell a0(tag:a0)-->
            <TD align=center valign=middle>
                <DIV ID="a0_cont" style="position: relative; height: 50px; width: 200px;">
                    <DIV ID="a0_txt"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;">
                        <TABLE>
                            <TD ID="a0_td" align=center valign=center width=195 height=45 class="actTD">
                                $auditProbability
                            </TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="a0_box"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;">
                        <TABLE>
                            <TD ID="a0_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="a0_img"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A
                            HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)"
                            onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="/resources/library/mlwebphp_100beta/transp.gif" border=0 width=200
                                                                   height=50></A></DIV>
                </DIV>
            </TD>
            <!--end cell-->
            <!--cell a1(tag:a1)-->
            <TD align=center valign=middle>
                <DIV ID="a1_cont" style="position: relative; height: 50px; width: 200px;">
                    <DIV ID="a1_txt"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;">
                        <TABLE>
                            <TD ID="a1_td" align=center valign=center width=195 height=45 class="actTD">$fineRate</TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="a1_box"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;">
                        <TABLE>
                            <TD ID="a1_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="a1_img"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A
                            HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)"
                            onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="/resources/library/mlwebphp_100beta/transp.gif" border=0 width=200
                                                                   height=50></A></DIV>
                </DIV>
            </TD>
            <!--end cell--></TR>
        <TR>
            <!--cell b0(tag:b0)-->
            <TD align=center valign=middle>
                <DIV ID="b0_cont" style="position: relative; height: 50px; width: 200px;">
                    <DIV ID="b0_txt"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;">
                        <TABLE>
                            <TD ID="b0_td" align=center valign=center width=195 height=45 class="actTD">$taxRate</TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="b0_box"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;">
                        <TABLE>
                            <TD ID="b0_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="b0_img"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A
                            HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)"
                            onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="/resources/library/mlwebphp_100beta/transp.gif" border=0 width=200
                                                                   height=50></A></DIV>
                </DIV>
            </TD>
            <!--end cell-->
            <!--cell b1(tag:b1)-->
            <TD align=center valign=middle>
                <DIV ID="b1_cont" style="position: relative; height: 50px; width: 200px;">
                    <DIV ID="b1_txt"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;">
                        <TABLE>
                            <TD ID="b1_td" align=center valign=center width=195 height=45 class="actTD"><?php echo "hello" ?></TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="b1_box"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;">
                        <TABLE>
                            <TD ID="b1_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD>
                        </TABLE>
                    </DIV>
                    <DIV ID="b1_img"
                         STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A
                            HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)"
                            onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="/resources/library/mlwebphp_100beta/transp.gif" border=0 width=200
                                                                   height=50></A></DIV>
                </DIV>
            </TD>
            <!--end cell--></TR>
    </TABLE>
    <!-- END MOUSELAB TABLE -->
    <!--BEGIN postHTML-->

    <!--END postHTML<INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM>-->
</body>
</html>