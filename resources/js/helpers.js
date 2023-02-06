let lastElementId = 0;

export function elementId() {
    return `id${++lastElementId}`;
}
