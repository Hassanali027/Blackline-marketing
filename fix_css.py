import os

file_path = "public/css/home.css"
res_path = "resources/css/home.css"

with open(file_path, "r", encoding="utf-8") as f:
    lines = f.readlines()

out_lines = []

correct_css = """/* Base text alignments */
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
}
"""

start_idx = -1
end_idx = -1

for i, line in enumerate(lines):
    if "/* Base text alignments */" in line:
        start_idx = i
    if "/* compact step list (small screens) */" in line:
        end_idx = i
        break

if start_idx != -1 and end_idx != -1:
    out_lines.extend(lines[:start_idx])
    out_lines.append(correct_css)
    
    # Process the rest of the lines to dedent 24 spaces
    for i in range(end_idx, len(lines)):
        line = lines[i]
        if line.startswith("                        "):
            out_lines.append(line[24:])
        else:
            out_lines.append(line)
            
    with open(file_path, "w", encoding="utf-8") as f:
        f.writelines(out_lines)
    with open(res_path, "w", encoding="utf-8") as f:
        f.writelines(out_lines)
    print("Fixed!")
else:
    print("Could not find boundaries")
