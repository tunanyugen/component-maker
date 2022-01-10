const readline = require('readline');
const path = require("path");
const fs = require("fs");
const { v4: uuidv4 } = require('uuid');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Component type: ", (type) => {
    rl.question("Component name: ", (name) => {
        rl.question("Description: ", (description) => {
            let file = path.resolve(__dirname, ".env");
            let uuid = "c" + uuidv4().replace("-", "");
            try{
                let env = fs.readFileSync(file, 'utf8');
                env.replace(/UUID=/, `UUID=${uuid}`);
                env.replace(/TYPE=/, `TYPE=${type}`);
                env.replace(/COMPONENT_NAME=/, `COMPONENT_NAME=${name}`);
                env.replace(/DESCRIPTION=/, `DESCRIPTION=${description}`);
                fs.writeFileSync(file, env, 'utf8');
            } catch (err){
                throw err;
            }
            rl.close();
        })
    })
} )

rl.on('close', function () {
  console.log('\nBYE BYE !!!');
  process.exit(0);
});