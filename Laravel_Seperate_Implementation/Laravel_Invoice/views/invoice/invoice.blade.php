    <!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Invoice — {{ $invoice['invoice_no'] }}</title>
<style>

* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: "Segoe UI", Arial, sans-serif; background:#f4f6f8; padding: 30px; }

/*  Wrapper  */
.wrap { 
  max-width: 850px; 
  margin: auto; 
  background:#fff; 
  padding: 28px; 
  border-radius:12px; 
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

/*  Header  */
header { 
  display:flex; 
  justify-content:space-between; 
  align-items:center; 
  border-bottom:2px solid #f0f0f0; 
  padding-bottom:18px; 
  margin-bottom:22px; 
}
header .brand { display:flex; gap:12px; align-items:center; }
header img { border-radius:6px; }
header .company { font-size:18px; color:#222; }
header .muted { font-size:13px; color:#777; }
header .meta { text-align:right; font-size:14px; }

/*  Billing Info  */
.grid { 
  display:flex; 
  justify-content:space-between; 
  gap:40px; 
  margin: 25px 0; 
}
.grid .box h4 { margin-bottom:6px; color:#333; font-size:16px; }
.grid .box p { line-height:1.6; font-size:14px; color:#555; }

/*  Table  */
table { width:100%; border-collapse: collapse; margin-top:12px; font-size:14px; }
th, td { padding:12px 10px; border:1px solid #e0e0e0; }
th { background:#f8f9fb; color:#333; text-align:left; font-weight:600; }
td { color:#444; }
.text-right { text-align:right; }
.mono { font-family: "Courier New", monospace; }

/*  Totals  */
.totals { margin-top:20px; display:flex; justify-content:flex-end; }
.totals table { width:280px; }
.totals td { padding:10px; }
.totals .total td { font-size:16px; border-top:2px solid #ccc; }

/*  Sections  */
section { margin-top:24px; }
section strong { display:block; margin-bottom:6px; color:#333; font-size:15px; }
section p { font-size:14px; color:#555; }

/*  Buttons  */
.actions { margin-top:28px; text-align:center; }
.btn { 
  padding:12px 26px; 
  border:none; 
  background:linear-gradient(135deg, #007bff, #0056b3); 
  color:#fff; 
  cursor:pointer; 
  border-radius:6px; 
  font-size:15px; 
  font-weight:500;
  transition: all 0.25s ease;
}
.btn:hover { background:linear-gradient(135deg, #0056b3, #003f88); transform: translateY(-1px); }

/*  Footer  */
footer { 
  margin-top:30px; 
  font-size:13px; 
  color:#777; 
  border-top:1px solid #eee; 
  padding-top:15px; 
  display:flex; 
  justify-content:space-between; 
  flex-wrap:wrap; 
  gap:10px;
}
</style>
</head>
<body>
  <div class="wrap">
    <div class="card" role="document" aria-label="Invoice">

      <!-- Header -->
      <header>
        <div class="brand">
        
          <div>
                <div>
                <img src="{{ $invoice['company']['logo'] }}" alt="Company logo" width="80">
            </div>
            <div class="company"><strong>{{ $invoice['company']['name'] }}</strong></div>
            <small class="muted">{{ $invoice['company']['address'] }} — GSTIN: {{ $invoice['company']['gst'] }}</small>
          </div>

        </div>
        <div class="meta">
          <div><strong>Invoice:</strong> <span class="mono">{{ $invoice['invoice_no'] }}</span></div>
          <div class="muted">Date: {{ $invoice['date'] }}</div>
          <div class="muted">Due: {{ $invoice['due_date'] }}</div>
        </div>
      </header>

      <!-- Bill To / From -->
      <div class="grid">
        <div class="box">
          <h4>Bill To</h4>
          <p><strong>{{ $invoice['client']['name'] }}</strong><br>
          {{ $invoice['client']['company'] }}<br>
          {{ $invoice['client']['email'] }}<br>
          {{ $invoice['client']['phone'] }}</p>
        </div>

        <div class="box">
          <h4>From</h4>
          <p><strong>{{ $invoice['company']['name'] }}</strong><br>
          {{ $invoice['company']['email'] }}<br>
          Phone: {{ $invoice['company']['phone'] }}</p>
        </div>
      </div>

      <!-- Items Table -->
      <table role="table" aria-label="Invoice items">
        <thead>
          <tr>
            <th>Description</th>
            <th>Qty</th>
            <th class="text-right">Unit Price</th>
            <th class="text-right">Tax</th>
            <th class="text-right">Line Total</th>
          </tr>
        </thead>
        <tbody>
          @php
            $subtotal = 0; $taxTotal = 0;
          @endphp
          @foreach ($invoice['items'] as $item)
            @php
              $lineBeforeTax = $item['qty'] * $item['unit_price'];
              $taxAmount = $lineBeforeTax * ($item['tax'] / 100);
              $lineTotal = $lineBeforeTax + $taxAmount;
              $subtotal += $lineBeforeTax;
              $taxTotal += $taxAmount;
            @endphp
            <tr>
              <td>{{ $item['description'] }}</td>
              <td>{{ $item['qty'] }}</td>
              <td class="text-right mono">₹{{ number_format($item['unit_price'], 2) }}</td>
              <td class="text-right mono">{{ $item['tax'] }}%</td>
              <td class="text-right mono">₹{{ number_format($lineTotal, 2) }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Totals -->
      <div class="totals">
        <table>
          <tr>
            <td class="muted">Subtotal</td>
            <td class="text-right mono">₹{{ number_format($subtotal, 2) }}</td>
          </tr>
          <tr>
            <td class="muted">Tax</td>
            <td class="text-right mono">₹{{ number_format($taxTotal, 2) }}</td>
          </tr>
          <tr class="total">
            <td><strong>Total</strong></td>
            <td class="text-right mono"><strong>₹{{ number_format($subtotal + $taxTotal, 2) }}</strong></td>
          </tr>
        </table>
      </div>

      <!-- Payment Details -->
      <section>
        <strong>Payment Details</strong>
        <p class="muted">{{ $invoice['bank'] }}</p>
      </section>

      <!-- Notes -->
      <section>
        <strong>Notes</strong>
        <p class="muted">Thank you for your business. Please make the payment by the due date.</p>
      </section>

      <!-- Actions -->
      <div class="actions">
        <button class="btn" onclick="window.print()">Download / Print</button>
      </div>

      <!-- Footer -->
      <footer>
        <div>Generated by {{ $invoice['company']['name'] }} • Invoice ID: <span class="mono">{{ $invoice['invoice_no'] }}</span></div>
        <div>If you have questions, contact {{ $invoice['company']['email'] }}</div>
      </footer>
    </div>
  </div>
</body>
</html>
