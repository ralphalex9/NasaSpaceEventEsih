<script type="text/javascript" src="dojoroot9/dojo/dojo.js" djConfig="parseOnLoad: true, isDebug: false"></script>
<link rel="stylesheet" type="text/css" href="dojoroot9/dijit/themes/tundra/tundra.css" />
<link rel="stylesheet" type="text/css" href="dojoroot9/dojox/image/resources/Lightbox.css" />
<link rel="stylesheet" type="text/css" href="dojoroot9/dojo/resources/dojo.css" />
<script>
    dojo.require("dijit.layout.TabContainer");
    dojo.require("dijit.layout.ContentPane");
    dojo.require("dijit.layout.LayoutContainer");
    dojo.require("dijit.TitlePane");
    dojo.require('dijit.form.Button');
    dojo.require("dijit.form.Textarea");
    dojo.require("dojox.image.Lightbox");
    dojo.require("dijit.Dialog");
    dojo.require("dijit.Editor");
    dojo.require("dijit.form.CheckBox");
    dojo.require("dijit.InlineEditBox");
    dojo.require("dijit.form.TextBox");
    dojo.require("dijit.form.ComboBox");
    dojo.require("dijit.form.FilteringSelect");
    dojo.require("dijit.Tooltip"); 
    dojo.require("dijit.Toolbar");
    dojo.require("dijit.form.ValidationTextBox");
    dojo.require("dojox.form.Uploader");
    //dojo.require("dojo.dnd.Source");
    dojo.require("dojox.form.PasswordValidator");
    dojo.require("dojo.fx");
    dojo.require("dojo.data.ItemFileReadStore");
    dojo.require("dojox.grid.DataGrid");
    dojo.require("dijit._editor.plugins.LinkDialog");
    dojo.require("dijit._editor.plugins.FontChoice");
    dojo.require("dijit._editor.plugins.TextColor");
    dojo.require("dojo._base.fx");
    dojo.require("dijit.form.Form");
    dojo.require("dojox.timing");
    dojo.require("dojo.on");
    dojo.require("dojo.dom");
    dojo.require("dojo.domReady");
</script>
<script>
    function checkMail() {
        var inp = dijit.byId('mail').getValue();
        alert(inp);
    }
    dojo.addOnLoad(checkMail);
</script>
