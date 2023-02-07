<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>
<nav class="globalMenuSp">
    <ul>
        <li @if(!empty($pageName) && $pageName=="question") selected @else not_selected @endif>
            <a href="{{route('www.question.index')}}">
                問題一覧
            </a>
        </li>
        <li class="@if(!empty($pageName) && $pageName=="serch") selected @else not_selected @endif">
            <a href="{{route('www.serch.index')}}">
                検索
            </a>
        </li>
        <li class="@if(!empty($pageName) && $pageName=="information") selected @else not_selected @endif">
            <a href="{{route('www.information.index')}}">
                お知らせ
            </a>
        </li>
        <li class="@if(!empty($pageName) && $pageName=="account") selected @else not_selected @endif">
            <a href="{{route('www.account.index')}}">
                マイメニュー
            </a>
        </li>
        <li>
            <a href="">
                ログアウト
            </a>
        </li>
    </ul>
</nav>
