<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>
<nav class="globalMenuSp">
    <ul>
        <li class="text-center align-items-center">
            <a href="{{route('www.question.index')}}">
                <i class="bi bi-house-fill"></i>
                問題一覧
            </a>
        </li>
        <li class="text-center align-items-center">
            <a href="{{route('www.serch.index')}}">
                <i class="bi bi-search"></i>
                検索
            </a>
        </li>
        <li class="text-center align-items-center">
            <a href="{{route('www.information.index')}}">
                <i class="bi bi-bell-fill"></i>
                お知らせ
            </a>
        </li>
        <li class="text-center align-items-center">
            <a href="{{route('www.account.index')}}">
                <i class="bi bi-person-fill"></i>
                マイメニュー
            </a>
        </li>
        <li class="text-center align-items-center">
            <a href="">
                <i class="bi bi-door-closed-fill"></i>
                ログアウト
            </a>
        </li>
    </ul>
</nav>

{{-- <li class="@if(!empty($pageName) && $pageName=="account") selected @else not_selected @endif "> --}}
