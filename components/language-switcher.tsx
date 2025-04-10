"use client"

import { useLanguage } from "@/contexts/language-context"
import { Button } from "@/components/ui/button"
import { Globe } from "lucide-react"

export default function LanguageSwitcher() {
  const { language, setLanguage } = useLanguage()

  const toggleLanguage = () => {
    setLanguage(language === "vi" ? "en" : "vi")
  }

  return (
    <Button
      variant="ghost"
      size="sm"
      onClick={toggleLanguage}
      className="flex items-center gap-1 text-white hover:bg-primary-light/20"
    >
      <Globe className="h-4 w-4" />
      <span>{language === "vi" ? "EN" : "VI"}</span>
    </Button>
  )
}
