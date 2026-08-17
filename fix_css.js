const fs = require('fs');

const filePath = 'public/css/home.css';
const resPath = 'resources/css/home.css';

const lines = fs.readFileSync(filePath, 'utf-8').split('\n');

const correctCss = `/* Base text alignments */
.lbl-strategy,
.lbl-results {
    right: 82.5%;
    text-align: right;
}

.lbl-story,
.lbl-exec {
    left: 82.5%;
    text-align: left;
}

/* Hover Outwards (translate) */
.lbl-strategy:hover,
.lbl-strategy.is-hovered,
.lbl-results:hover,
.lbl-results.is-hovered {
    transform: translate(-12px, -50%);
}

.lbl-story:hover,
.lbl-story.is-hovered,
.lbl-exec:hover,
.lbl-exec.is-hovered {
    transform: translate(12px, -50%);
}

/* Positioning the descriptions absolutely */
.lbl-strategy p,
.lbl-story p {
    bottom: 100%;
    margin-bottom: 6px;
}

.lbl-results p,
.lbl-exec p {
    top: 100%;
    margin-top: 6px;
}

.lbl-strategy p,
.lbl-results p {
    right: -140px;
}

.lbl-story p,
.lbl-exec p {
    left: -140px;
}

/* Description Hover Animations */
.lbl-strategy p,
.lbl-story p {
    transform: translateY(10px);
}

.lbl-results p,
.lbl-exec p {
    transform: translateY(-10px);
}

.ring-label:hover p,
.ring-label.is-hovered p {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.lbl-strategy,
.lbl-story {
    top: 32.6%;
}

.lbl-results,
.lbl-exec {
    top: 67.4%;
}`;

let startIdx = -1;
let endIdx = -1;

for (let i = 0; i < lines.length; i++) {
    if (lines[i].includes('/* Base text alignments */')) {
        startIdx = i;
    }
    if (lines[i].includes('/* compact step list (small screens) */')) {
        endIdx = i;
        break;
    }
}

if (startIdx !== -1 && endIdx !== -1) {
    const outLines = [];
    for (let i = 0; i < startIdx; i++) {
        outLines.push(lines[i]);
    }
    outLines.push(correctCss);
    
    for (let i = endIdx; i < lines.length; i++) {
        if (lines[i].startsWith('                        ')) {
            outLines.push(lines[i].substring(24));
        } else {
            outLines.push(lines[i]);
        }
    }
    
    fs.writeFileSync(filePath, outLines.join('\n'));
    fs.writeFileSync(resPath, outLines.join('\n'));
    console.log("Fixed!");
} else {
    console.log("Could not find boundaries");
}
