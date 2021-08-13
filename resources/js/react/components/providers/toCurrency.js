export default function toCurrency(number) {
    return new Intl.NumberFormat("en-US", { style: "decimal" }).format(number);
}
