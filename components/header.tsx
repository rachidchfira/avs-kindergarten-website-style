"use client"

import Link from "next/link"
import Image from "next/image"
import { Phone, Clock } from "lucide-react"
import { useLanguage } from "@/contexts/language-context"
import LanguageSwitcher from "./language-switcher"

export default function Header() {
  const { t } = useLanguage()

  return (
    <header>
      <div className="bg-primary text-white py-2">
        <div className="container mx-auto flex justify-between items-center px-4">
          <div className="flex items-center space-x-4">
            <div className="flex items-center">
              <Clock className="w-4 h-4 mr-2" />
              <span className="text-sm">7:00 - 17:30</span>
            </div>
            <div className="flex items-center">
              <Phone className="w-4 h-4 mr-2" />
              <span className="text-sm">0901456380 - 0902.685.485</span>
            </div>
          </div>
          <div className="flex space-x-4 items-center">
            <Link href="/gallery" className="text-sm hover:underline">
              Photo Gallery
            </Link>
            <Link href="/videos" className="text-sm hover:underline">
              Video Gallery
            </Link>
            <LanguageSwitcher />
          </div>
        </div>
      </div>

      <div className="container mx-auto py-4 px-4 flex justify-between items-center">
        <Link href="/" className="flex items-center space-x-3">
          <Image src="/logo.png" alt="H&A Pre STEAM Kindergarten" width={100} height={100} className="object-contain" />
          <div>
            <h1 className="text-xl font-bold text-primary">{t("site.name")}</h1>
            <p className="text-xs text-secondary">{t("site.tagline")}</p>
          </div>
        </Link>

        <nav className="hidden md:flex space-x-8">
          <Link href="/" className="text-primary hover:text-primary-light font-medium">
            {t("nav.home")}
          </Link>
          <Link href="/about" className="text-primary hover:text-primary-light font-medium">
            {t("nav.about")}
          </Link>
          <Link href="/programs" className="text-primary hover:text-primary-light font-medium">
            {t("nav.programs")}
          </Link>
          <Link href="/teachers" className="text-primary hover:text-primary-light font-medium">
            {t("nav.teachers")}
          </Link>
          <Link href="/news" className="text-primary hover:text-primary-light font-medium">
            {t("nav.news")}
          </Link>
          <Link href="/contact" className="text-primary hover:text-primary-light font-medium">
            {t("nav.contact")}
          </Link>
        </nav>

        <button className="md:hidden">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="h-6 w-6 text-primary"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </header>
  )
}
