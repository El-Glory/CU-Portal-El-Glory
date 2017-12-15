<div class="payment-receipt" style="display: none;">
	<div class="receipt-heading">
		 <h4 class="h4" style="color: #ffffff; margin-right: 40px; font-family: 'oxygen',sans-serif;">Payment receipt</h4>
	</div>

	<div class="receipt-details" id="receipt-details">
		<ul>
			<li><h4>Ciroma Adekunke G.</h4></li>
			<li><span>15cu019876</span></li>
			<li><span>Computer Science</span></li>
			<li><span>100 level</span></li>
		</ul>
           <br>
           <br>
              <table class="table table-striped" style="width: 80%; margin-left: 60px; font-family: 'oxygen',sans-serif; font-size: 15px; border:1px solid #ccc;">
        	<thead>
        		<tr>
        			<th>S/N</th>
        			<th>Purpose</th>
        			<th>Transaction Number</th>
        			<th>Amount</th>
        			<th>Date Paid</th>
        		</tr>
            </thead>

        	<tbody>
        		<tr>
        			<td>1</td>
        			<td>School Fees</td>
        			<td>1234567890</td>
        			<td><img src="img/naira.png" height="10" width="20" style="width: 10%; height: 30px; margin-top: -7px; margin-left: -10px;">500.00</td>
        			<td>2017-09-09</td>
        		</tr>

        		<tr>
        			<td>2</td>
        			<td>School Fees</td>
        			<td>1234567890</td>
        			<td><img src="img/naira.png" height="20" width="20" style="width: 10%; height: 30px; margin-top: -7px; margin-left: -10px;">500.00</td>
        			<td>2017-09-09</td>
        		</tr>

        		<tr>
        			<td>3</td>
        			<td>School Fees</td>
        			<td>1234567890</td>
        			<td><img src="img/naira.png" height="20" width="20" style="width: 10%; height: 30px; margin-top: -7px; margin-left: -10px;">500.00</td>
        			<td>2017-09-09</td>
        		</tr>
        		<tr>
        			<td></td>
        			<td></td>
        			<td></td>
        			<td>Total</td>
        			<td><img src="img/naira.png" height="20" width="20" style="width: 10%; height: 30px; margin-top: -7px; margin-left: -16px;">1500.00</td>
        		</tr>
        	</tbody>
        </table>
        <input type="button" name="Print" value="Print" class="btn btn-success" onclick="printContent('receipt-details')">

	</div>
</div>
<script type="text/javascript" src="js/print.js"></script>
 <script type="text/javascript" src="controls.js"></script>  