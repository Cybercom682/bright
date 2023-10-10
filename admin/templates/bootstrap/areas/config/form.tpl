{if isset($head) && $head === true}
    <form id="{$id}" method="{$method|default:'post'}">
{/if}
{if isset($foot) && $foot === true}
    {if isset($button) && $button === true}
        <button type="submit" id="save-btn-{$id}" onclick="postForm(this)" class="btn btn-{$btnBg|default:'primary'}">{$btnText|default:'Submit'}</button>
    {/if}
</form>

    <script>
        function postForm(el) {
            var $form = $(el).closest('form'); // Das Formular, zu dem der Button gehört
            var action = $form.attr('action'); // Die Aktion des Formulars

            $.ajax({
                url: action,
                method: 'POST',
                data: $form.serialize(),
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
            return false;
        }
    </script>
{/if}
