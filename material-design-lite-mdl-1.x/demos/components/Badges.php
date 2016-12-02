<?php require_once __DIR__.'../../../header.php'; ?>
<p>Small status descriptors for UI elements.</p>
<p>Number badge on icon</p>
<div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1">account_box</div>
<div class="material-icons mdl-badge mdl-badge--overlap" data-badge="♥">account_box</div>

<pre>

Number badge
<span class="mdl-badge" data-badge="4">Inbox</span>
Icon badge
<span class="mdl-badge" data-badge="♥">Mood</span>

A badge inside a link.
<a href="#" class="mdl-badge" data-badge="7">This link contains a badge.</a>

A badge near, but not included in, a link.
<a href="#">This link is followed by a badge.</a>
<span class="mdl-badge" data-badge="12"></span>

A badge inside a link with too many characters to fit inside the badge.

<a href="#" class="mdl-badge" data-badge="123456789">
This badge has too many characters.</a>
A badge inside a link with no badge background color.

<a href="#" class="mdl-badge mdl-badge--no-background" data-badge="123">
This badge has no background color.</a>
</pre>
<?php require_once __DIR__.'../../../footer.php'; ?>