<%@ Register TagPrefix="DM" Namespace="LibraryDM"%>
<%@ Register TagPrefix="DM" TagName="Top" Src="local/bHtmlTop.ascx" %> 
<%@ Page Debug="True"%>
<script runat="server">
Dim sDate, eDate As String
	Public Sub page_load()
		If Request("q1") <> "" Then
			sDate = Request("q1")
		Else 
			
			sDate = Date.Now()
		End If
		If Request("q2") <> "" Then
			eDate = Request("q2")
		Else 
			eDate = Date.Now()
		End If
		IF ""& Request("act") = "getErrorDetails" Then
			DM.Write("<img src='image/headerarrow1.png'><br><table class='table table-bordered padLeft'  style='table-layout: fixed;width:100%'>")
				DM.Write("<thead style='width:100%;'>")
				DM.Write("<tr>")
				DM.Write("<th class='left' style='width:5%;'>Case#</th><th class='left' style='width:10%%;'>Username</th><th class='left' style='width:10%;'>LogDate</th><th class='left' style='width:28%;'>PreviousUrl</th><th class='left' style='width:28%;'>Url</th><th class='left'  style='width:20%;'>ErrorMessage</th>")
				DM.Write("</tr>")
				DM.Write("</thead>")
				DM.Write("<tbody>")
				Dim drLog As System.Data.Oledb.OledbDataReader
				
				drLog = Sql.Read("SELECT ErrorLog.ID AS CaseNumber, ErrorLog.Date,ErrorLog.PreviousUrl, ErrorLog.Url, ErrorLog.ErrorMessage, Party.Name AS Username FROM ErrorLog LEFT OUTER JOIN Party ON ErrorLog.UserID = Party.ID WHERE ErrorLog.Url Like '%"& Request("URL") &"%'   AND cast(date as date) BETWEEN  '" & sDate & "' AND  '" & eDate & "' AND  ISNULL(UserID,0)<>0")
				
				While drLog.Read()	
					DM.Write("<tr>")
					DM.Write("<td class='left padLeft' >"& drLog("CaseNumber") &"</td>")
					DM.Write("<td class='left'>"& drLog("Username") &"</td>")
					DM.Write("<td class='left'>"& drLog("Date") &"</td>")
					DM.Write("<td class='left' style='word-wrap:break-word;'><a href='"& drLog("PreviousUrl") &"' target='_blank'>"&drLog("PreviousUrl")&"</td>")
					DM.Write("<td class='left' style='word-wrap:break-word;'><a href='"& drLog("Url") &"' target='_blank'>"& drLog("Url") &"</a></td>")
					DM.Write("<td class='left' style='word-wrap:break-word;'>"& drLog("ErrorMessage") &"</td>")
					DM.Write("</tr>")
				End While
				DM.Write("</tbody>")
				DM.Write("</table>")
			DM.Debug("")			
		End IF

		listReport.Source = "SELECT  COUNT(ID) As COUNT_OP_ID_CP_ , REPLACE(LEFT (URL,CHARINDEX('.aspx', url)) +'aspx',LEFT(URL, CHARINDEX('.com',URL))+'com/','') AS URL  FROM errorlog WHERE cast(date as date) BETWEEN  '" & sDate & "' AND  '" & eDate & "' AND  ISNULL(UserID,0)<>0   GROUP BY REPLACE(LEFT (URL,CHARINDEX('.aspx', url)) +'aspx',LEFT(URL, CHARINDEX('.com',URL))+'com/','') ORDER BY COUNT(ID)  DESC "
	'	DM.DEBUG(listReport.Source)
		listReport.Headers = "2URL, 2Count>"
		listReport.Widths = "100, 100"
		listReport.Label="Error Log  -  By Script Name From  " & sDate  &" - "& eDate &""
	End Sub

	Sub ListReportDetail(row as System.data.datarow, sort as String, Byval output AS String)
		DM.Write("<tr  onclick=""javascript:getErrorLogDetail('"& row("URL").Replace(".","_").Replace("/","_").Replace(" ","_") &"');"" >")
			DM.Write("<td  style='padding-left:15px'>"&  row("URL")  &"</td>")
			DM.Write("<td style='text-align: right;'><a href='R_Errorlog.aspx?'> "& row("COUNT_OP_ID_CP_")  &"</a></td>")
		DM.Write("</tr>")
		DM.Write("<tr><td style='padding:0px;border:none;padding-left:0px;' colspan='2' ID='rowInner_"& row("URL").Replace(".","_").Replace("/","_").Replace(" ","_")  &"'></td></tr>")
		'DM.Write("<tr><td  ID='rowInner_"& row("URL") &"'></td></tr>")
	End Sub

</script>
<DM:Top runat=server id="top" Title="SPS - Errors Log!!! "/>
<%SPS.ShowDateRangeBetween()%>

<table>
        <tr><td>
          <DM:List runat="server" id='listReport'
			ShowLabel="True"
			ShowHeader="True"
			Width="980"
			Rows="100"
			OnEachRecord="ListReportDetail"
			ShowPrintIcon = "false"
			ShowExportIcon = "false"
			ShowLinkBack='True'
			ShowBorderBottom = "False"
			ShowPagingBottom="False"
			ShowAdvancedSearch="True"
			ShowPagingTop="True"
			ListStyle = "table table-striped "
			 
			/>
        </td>
      </tr>
    <table>

<script type="text/javascript">
function getErrorLogDetail(URL)
	{

		if (document.getElementById("rowInner_"+URL).innerHTML != "")
		{
			$('#rowInner_'+URL).html("");
			$('#rowInner_'+URL).hide();
		}
	else
		{
			$.get('R_ErrorLogDev.aspx?act=getErrorDetails&URL='+ URL +'&q1=<%= sDate%>&q2= <%= eDate %>&z='+new Date().getTime(), function(data){			
				$('#rowInner_'+URL).show();
				$('#rowInner_'+URL).html(data);	});
		}		
	}

</script>

<%  sDate = Nothing : eDate = Nothing  %>
