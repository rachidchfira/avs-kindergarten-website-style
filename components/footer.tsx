"use client"

import Image from "next/image"
import Link from "next/link"
import { Facebook, Instagram } from "lucide-react"
import { useLanguage } from "@/contexts/language-context"

export default function Footer() {
  const { t } = useLanguage()

  return (
    <footer className="bg-primary text-white py-4">
      <div className="container mx-auto px-4">
        <div className="flex flex-col items-center space-y-6">
          <div className="flex flex-col items-center">
            <Image
              src="/logo.png"
              alt="H&A Pre STEAM Kindergarten"
              width={70}
              height={70}
              className="bg-white rounded-full p-2 object-contain mb-4"
            />
            <h2 className="text-lg font-semibold text-center">{t("hero.title")}</h2>
          </div>
          <div className="flex space-x-4">
            <a href="https://www.facebook.com/ha.kindergarten" className="hover:text-secondary">
              <Facebook className="w-5 h-5" />
            </a>
            <a href="https://www.instagram.com/ha.kindergarten" className="hover:text-secondary">
              <Instagram className="w-5 h-5" />
            </a>
          </div>
          <p className="text-sm">{t("footer.copyright")}</p>
        </div>
      </div>
    </footer>
  )
}
