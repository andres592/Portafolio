const {src, dest,watch, parallel} = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const webp = require("gulp-webp")
const plumber = require("gulp-plumber")

function css(callback){//pasos
    src("src/scss/**/*.scss")//identificar el archivo sass
    .pipe(plumber())
    .pipe(sass())//compilarlo
    .pipe(dest("builder/css"))//guardarlo en el disco duro

    callback();//callback que avisa a gulp cuando llegamos al final
}


function versionWebp(done){ 
    const opciones = {
        quality : 50
    }

        src("src/scss/img/**/*.{jpg,png}")
        .pipe(webp(opciones))
        .pipe(dest("builder/img"))
    done();
}

function javascript(done){
    src("src/js/**/*.js")
    .pipe(dest("builder/js"))
    done();
}


function dev(done){
    watch("src/scss/**/*.scss",css);
    watch("src/js/**/*.js",javascript);
    done();
}

exports.css = css;
exports.javascript = javascript;
exports.versionWebp = versionWebp;
exports.dev = parallel(versionWebp, dev, javascript);

