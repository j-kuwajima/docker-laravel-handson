<div>
    <h1><a href="/">確認メールの送信</a></h1>
    <div>
        @if (session('status') === 'verification-link-sent')
            <p>
                登録したメールアドレスを確認してください！！
            </p>
            <p><a href="/">TOPに戻る</a></p>
        @else
            <p>
                確認メールを送信してください！！
            </p>
            <form method="post" action="{{ route('verification.send') }}">
                @method('post')
                @csrf
                <div>
                    <button type="submit">確認メールを送信</button>
                </div>
            </form>
            
            <!-- 以下に確認メールのリンクを挿入 -->
            <p>
                リンクをクリックして確認してください：<br>
                <a href="{{ $displayableActionUrl }}">{{ $actionUrl }}</a>
            </p>
        @endif
    </div>
</div>