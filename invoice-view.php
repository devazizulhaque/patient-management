<?php
   include( "header.php" );
?>

		<div class="page-content">
			<div class="container inv-section">
				<div class="top-inv-col">
					<div class="inv-logo">
						<img alt="" src="../assets/images/logo.php" alt="">
					</div>
					<div class="order-details">
						<p>Order: <span>#00124</span></p>
						<p>Issued: <span>02/02/2021</span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<h5>Invoice From</h5>
						<ul class="inv-receiver">
							<li>Dr. Mehmet A.<br> Maslak<br> İstanbul</li>
						</ul>
						<h5>Invoice To</h5>
						<ul class="inv-receiver">
							<li>Esra Şen<br> Izmit <br> Kocaeli</li>
						</ul>
					</div>
					<div class="col-6">
						<div class="payment-method">
							<h5>Payment Method</h5>
							<ul>
								<li>Debit Card<br> XXXXXXXXXXXX-2541<br> HDFC Bank</li>
							</ul>
						</div>
					</div>
				</div>
				<table class="inv-table">
					<tbody>
						<tr>
							<th class="text-align-left">Description</th>
							<th class="text-align-center">Quantity</th>
							<th class="text-align-center">VAT</th>
							<th class="text-align-center">Total</th>
						</tr>
						<tr>
							<td>
								General Consultation	
							</td>
							<td class="text-align-center"> $100</td>
							<td class="text-align-center"> $18</td>
							<td class="text-align-center"> $118</td>
						</tr>
						<tr>
							<td>
								Video Call Booking	
							</td>
							<td class="text-align-center"> $100</td>
							<td class="text-align-center"> $18</td>
							<td class="text-align-center"> $118</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3"><b>Subtotal</b></td>
							<td colspan="1"> 236 $</td>
						</tr>
						<tr>
							<td colspan="3"><b>Discount</b></td>
							<td colspan="1">-10%</td>
						</tr>
						<tr>
							<td colspan="3"><b>Total Amout </b></td>
							<td colspan="1"> 212,4 $</td>
						</tr>
					</tfoot>
				</table>
				<div class="invoice-info">
					<h5>Other information</h5>
					<p class="text-muted">Patient notes have been sent to you by e-mail.</p>
				</div>
			</div>
		</div>

	</div>
    <!-- /Main wrapper -->
	<?php
   include( "footer.php" );
?>