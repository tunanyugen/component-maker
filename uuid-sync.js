require("dotenv").config();
const fs = require("fs");
const path = require("path");

class UUIDSync{
    lastRan = Date.now();
    apply(compiler){
        compiler.hooks.afterEmit.tap("AfterEmitPlugin", (compilation) => {
            // prevent infinite loop
            if (Date.now() - this.lastRan <= 3000){ return }
            this.lastRan = Date.now();
            // prevent infinite loop
            let bladePath = path.resolve(compiler.context, "src/index.blade.php");
            let scssPath = path.resolve(compiler.context, "src/index.scss");
    
            let blade = fs.readFileSync(bladePath, "utf8");
            let scss = fs.readFileSync(scssPath, "utf8");
    
            blade = blade.replace(/<div.*>/ui, `<div class="${process.env.UUID}" id="${process.env.UUID}">`);
            scss = scss.replace(/\..*/ui, `.${process.env.UUID}{`);
    
            fs.writeFileSync(bladePath, blade, "utf8");
            fs.writeFileSync(scssPath, scss, "utf8");
        })
    }
}

module.exports = UUIDSync;