# Read the bgt-ids.txt file. Each line contains a mapping like PSA 10:1 => PSA 9:22, what I call Target -> Source.
# For each line, compare Target and Source, and if they are different, create a new line in the output file with the Source -> Target mapping.
# The target should be parsed as an array, e.g. "PSA 10:1" => ["PSA", 10, 1].
# Emit the output file as a PHP associative array.

def parse_mapping(mapping):
    """Parse a mapping string into a list."""
    parts = mapping.split()
    return [parts[0], int(parts[1].split(':')[0]), int(parts[1].split(':')[1])]

def process_bgt_ids(input_file, output_file):
    mappings = {}

    # Read the input file and process each line
    with open(input_file, 'r') as infile:
        for line in infile:
            if '=>' in line:
                target, source = line.strip().split(' => ')
                if target != source:
                    target_array = parse_mapping(target)
                    mappings[source] = str(target_array)

    # Write the output file as a PHP associative array
    with open(output_file, 'w') as outfile:
        outfile.write("<?php\n")
        outfile.write("$mappings = array(\n")
        for source, target in mappings.items():
            outfile.write(f"    '{source}' => {target},\n")
        outfile.write(");\n")
        outfile.write("?>")

# Define the input and output file paths
input_file = 'bgt-ids.txt'
output_file = 'bgt-mappings.php'

# Process the bgt-ids file and generate the output PHP file
process_bgt_ids(input_file, output_file)