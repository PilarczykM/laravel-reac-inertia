import { Link } from "@inertiajs/react";

export default function Pagination({ links }) {
  return (
    <nav className="text-center mt-4">
      {links.map(link => (
        <Link
          key={link.label}
          as="button"
          href={link.url || "#"}
          className={
            "inline-block py-1 px-2 mx-2 rounded-lg bg-slate-200 dark:text-gray-200 text-xs " +
            (link.active ? "!bg-blue-600 text-white " : " ") +
            (!link.url ? "! !bg-gray-400 cursor-not-allowed " : "hover:bg-blue-950 hover:text-white")
          }
          disabled={!link.url}
          preserveScroll
          dangerouslySetInnerHTML={{ __html: link.label }} />
      ))}
    </nav>
  )
}
