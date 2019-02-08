defmodule Palindrome do 

  def largest_of_three() do
    100..999
    |> Stream.flat_map(fn x -> expand(x) end) 
    |> Enum.sort(&(&1 >= &2))
    |> Stream.map(&(Integer.to_charlist(&1)))
    |> Stream.filter(&(&1==Enum.reverse(&1)))
    |> Enum.take(1)
    
  end  

  defp expand(number) do
    100..999
    |> Stream.map(&(&1*number))
    |> Enum.to_list
  end
end
