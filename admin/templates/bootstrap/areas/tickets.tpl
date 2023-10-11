<div class="container-fluid">
    <span class="mt-2">Create Ticket</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="ticket-area" name="ticket-area"></textarea>
    </div>
</div>

{literal}
    <script>
        CKEDITOR.replace('ticket-area');
    </script>
{/literal}