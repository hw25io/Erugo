<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      background-color: #f8fafc;
      color: #374151;
      line-height: 1.5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      text-align: center;
      padding: 20px 0;
      background-color: #ffffff;
      border-radius: 8px 8px 0 0;
      border-bottom: 1px solid #e5e7eb;
    }

    .content {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 0 0 8px 8px;
    }

    .footer {
      text-align: center;
      padding: 20px;
      font-size: 0.875rem;
      color: #6b7280;
    }

    .button {
      display: inline-block;
      padding: 12px 24px;
      background-color: #2563eb;
      color: #ffffff;
      text-decoration: none;
      border-radius: 6px;
      margin: 20px 0;
    }

    .button:hover {
      background-color: #1d4ed8;
    }

    @media only screen and (max-width: 600px) {
      .container {
        padding: 10px;
      }

      .content {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <!-- You can add your logo here -->
      <h1>@yield('header')</h1>
    </div>

    <div class="content">
      @yield('content')

      @hasSection('action_url')
      <div style="text-align: center;">
        <a href="@yield('action_url')" class="button">
          @yield('action_text', 'Click Here')
        </a>
      </div>
      @endif
    </div>

    <div class="footer">
      <p>
        <small>
          You are receiving this email because you are a user of <a href="{{ $settings['application_url'] }}">{{
            $settings['application_name'] }}</a>.
        </small>
      </p>
    </div>
  </div>
</body>

</html>