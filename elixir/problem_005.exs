defmodule Smallestmultiple do 

  def evenly_divisible_by(numbers) do
    Stream.iterate(1, &(&1 + 1))
    |> Stream.filter(&(divisible_by_all(&1, numbers)))
    |> Enum.take(1)
    
  end  

  defp divisible_by_all(number, divisible_by) do
    !Enum.any?(divisible_by, fn x -> rem(number, x) > 0 end)
  end
end
