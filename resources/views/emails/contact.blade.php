<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; color: #334155; line-height: 1.6; padding: 20px; }
        .box { background: #f8fafc; border: 1px solid #e2e8f0; padding: 20px; border-radius: 12px; max-width: 600px; }
        .field { margin-bottom: 12px; }
        .label { font-weight: bold; color: #0f172a; }
        .message-content { background: #ffffff; border: 1px solid #cbd5e1; padding: 15px; border-radius: 8px; margin-top: 8px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Nova mensagem do site</h2>
        
        <div class="field">
            <span class="label">Nome:</span> {{ $data['name'] }}
        </div>
        
        <div class="field">
            <span class="label">E-mail:</span> {{ $data['email'] }}
        </div>
        
        <div class="field">
            <span class="label">Mensagem:</span>
            <div class="message-content">
                {!! nl2br(e($data['message'])) !!}
            </div>
        </div>
    </div>
</body>
</html>